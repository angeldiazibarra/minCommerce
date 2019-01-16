$( document ).ready(function(){
    // console.log('load script');
});

function showid(id){
    // console.log('showid: ' + id);
    document.getElementById(id).style.display = 'block';
}


function hideid(id){
    // console.log('hideid: ' + id);
    document.getElementById(id).style.display = 'none';
}

function submittpv() {
   ga('send', 'event', 'Button', 'Click', 'Purchase PDF Adobe', 12);
   hideid('tpvform');
   showid('tpvalert');
}