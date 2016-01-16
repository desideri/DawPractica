from django.core.urlresolvers import reverse
from django.core.serializers.json import *
from django.shortcuts import render, redirect, render_to_response
from django.contrib.auth import authenticate,login
from django.http import HttpResponseRedirect, HttpResponse, HttpResponseBadRequest,HttpResponseNotAllowed,HttpResponseNotFound,HttpResponseForbidden
from web.models import *
from suds.xsd.doctor import ImportDoctor, Import
from suds.client import Client
from django.template import RequestContext
from django.core.paginator import Paginator, EmptyPage, PageNotAnInteger
from django.template.context_processors import csrf


#funcion logout
class AutoLogout:
     def process_request(self, request):
        if not request.user.is_authenticated() :
         return
        try:
            if datetime.now() - request.session['last_touch'] > timedelta( 0, settings.AUTO_LOGOUT_DELAY * 60, 0):
                auth.logout(request)
                del request.session['last_touch']
                print ("La sesion se ha cerrado por inactividad")
                return
        except KeyError:
         pass
         request.session['last_touch'] = datetime.now()

def home(request):
    return render(request,'index.html',{})

def login(request):
    if request.method == 'POST':
        try:
            user = request.POST['user'].strip()
            pwd = request.POST['pwd'].strip()
        except:
            return HttpResponseBadRequest()
        from django.contrib.auth import authenticate, login
        auth = authenticate(username = user , password = pwd)
        if auth is not None:
           login(request, auth)
           return HttpResponse()
        else:
            url = 'http://ws.espol.edu.ec/saac/wsandroid.asmx?WSDL' #http://ws.espol.edu.ec/saac/wsandroid.asmx?WSDL
            imp = Import('http://www.w3.org/2001/XMLSchema')
            imp.filter.add('http://tempuri.org/')
            doctor = ImportDoctor(imp)
            client = Client(url, doctor=doctor)
            auth = client.service.autenticacion(user,pwd)
            if auth == True:
                auth = User.objects.create_user(username=user, password=pwd)
                auth.save()
                auth = authenticate(username = user , password = pwd)
                login(request, auth)
                return HttpResponse()
            else:
                return HttpResponseBadRequest()
    else:
        return HttpResponseBadRequest()

def logout(request):
    from django.contrib.auth import logout
    logout(request)
    return redirect('/')

def vclientes(request):
    return render(request,'clientes.html', {})

def clientes(request):
    print("views clientes")
    if request.method == 'GET':
            orders = Orders.objects.all()
            response = render_to_response(
        'json/prueba.json',
        {'orders': orders}, #mismo etiqueta en el json
        context_instance=RequestContext(request)
            )
    response['Content-Type'] = 'application/json; charset=utf-8'
    response['Cache-Control'] = 'no-cache'
    return response

def consultarCliente(request):
    if request.method == 'GET':
            cliente = request.GET.get('txtCliente',None)
            orders = Orders.objects.filter(CustomerId = cliente)
            response = render_to_response(
        'json/prueba.json',
        {'orders': orders}, #mismo etiqueta en el json
        context_instance=RequestContext(request)
            )
    response['Content-Type'] = 'application/json; charset=utf-8'
    response['Cache-Control'] = 'no-cache'
    return response

def guarda(request):
    print("janina fea")

    if request.method == 'POST':
        from django.utils import timezone
        print("hola")
        try:
            orid = request.POST.get('OrderId',None)
            cuid = request.POST.get('CustomerId',None)
            print("hholaa")
            print(orid)
            #o = Orders(120,customerid=cuid)
            o = Orders(OrderId=parseInt(orid),CustomerId=cuid)
        except:
            #si no se registra correctamente el usuario se queda en la misma pagina de registrar
            return HttpResponseRedirect(reverse('vclientes'))
        o.save()
        print(o)
    return render_to_response('clientes.html',{}, context_instance=RequestContext(request))
    


def vinsertar(request):
    return render(request, 'insertar.html',{})

def insertar(request):
    """
    orderid INT
    customerid CHAR
    employeeid INT
    orderdate VARCHAR
    requireddate VARCHAR
    shippeddate VARCHAR
    shipvia INT
    freight DOUBLE '0'
    shipname VARCHAR
    shipaddress VARCHAR
    shipcity VARCHAR
    shipregion VARCHAR
    shippostalcode VARCHAR
    shipcountry VARCHAR"""
    nwo = Orders(1248,"POLO2",2,"147","147","135",1,0,"ESPOL","","","","","")
    nwo.save()
    orders = Orders.objects.all()
    return render(request, 'clientes.html',{'orders':orders})
"""
def eliminar(request):

    order = request.GET.get('id',None)
    if order is None:
        return HttpResponseBadRequest()
    else:
        o = Orders.objects.filter(orderid = order)
        o.delete()
        return redirect('/vclientes')"""
