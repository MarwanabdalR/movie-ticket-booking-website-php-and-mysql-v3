let lang ={
    ar:{
        login:"تسجيل دخول"
    },
    En:{
        login:"Login"
    }
}
let selector= document.getElementById('language_selector');
selector.onchange=updatalanguage();

function updatalanguage(){
    let language=selector.options[selector.selectIndex].value;
    let nodes=document.querySelectorAll('[data-lang]');
    let i=nodes.length;
    while(i--){
        let key=nodes[i].getAttribute('data-lang');
        nodes[i].innerHTML =lang[language][key];
    }


}
