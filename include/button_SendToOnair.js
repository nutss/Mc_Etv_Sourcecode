
Runner.buttonEvents["SendToOnair"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='SendToOnair';if(!pageObj.buttonEventBefore['SendToOnair']){pageObj.buttonEventBefore['SendToOnair']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;}}
if(!pageObj.buttonEventAfter['SendToOnair']){pageObj.buttonEventAfter['SendToOnair']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;}}
$('a[id="SendToOnair"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="SendToOnair"+"_"+Runner.genId();var button_SendToOnair=new Runner.form.Button({id:this.id,btnName:"SendToOnair"});button_SendToOnair.init({args:[pageObj,proxy,pageid]});});};