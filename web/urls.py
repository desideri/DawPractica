from django.conf.urls import include, url
from django.contrib import admin
from django.contrib.auth.views import login, logout
from web.views import *


urlpatterns = [
    # Examples:
    # url(r'^$', 'daw.views.home', name='home'),
    url(r'^admin/', include(admin.site.urls)),
    url(r'^login/', 'web.views.login'),
    url(r'^logout/', 'web.views.logout'),
    url(r'^vclientes/', 'web.views.vclientes'),
    url(r'^clientes/', 'web.views.clientes'),
    url(r'^vinsertar/', 'web.views.vinsertar'),
    url(r'^guardarOOOrden$', 'web.views.guardarOOOrden',name="guardarOOOrden"),
    url(r'^guarda$', 'web.views.guarda',name="guarda"),
    url(r'^insertar/', 'web.views.insertar'),
    url(r'^consultar/', 'web.views.consultarCliente'),
    #url(r'^eliminar/', 'web.views.eliminar'),


    url(r'^$', 'web.views.home'),

]
