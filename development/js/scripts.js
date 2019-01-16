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

function submitform(e) {
   e.preventDefault();
   hideid('tpvform');
   showid('tpvalert');
}