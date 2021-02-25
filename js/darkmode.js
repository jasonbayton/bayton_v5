document.getElementById('darktoggle').addEventListener('click', function(event){
  (event.target.clicked) ? document.body.setAttribute('data-theme', 'dark') : document.body.removeAttribute('data-theme');
});
