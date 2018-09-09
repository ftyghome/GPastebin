function uncheckall()
{
    document.getElementById('c').className -= 'am-active';
    document.getElementById('cpp').className -= 'am-active';
    document.getElementById('java').className -= 'am-active';
    document.getElementById('python').className -= 'am-active';
    document.getElementById('ptext').className -= 'am-active';
}
function selc()
{
    uncheckall();
     document.getElementById('c').className = 'am-active';
}
function selcpp()
{
    uncheckall();
     document.getElementById('cpp').className = 'am-active';
}
function seljava()
{
    uncheckall();
     document.getElementById('java').className = 'am-active';
}
function selpython()
{
    uncheckall();
     document.getElementById('python').className = 'am-active';
}
function selptext()
{
    uncheckall();
     document.getElementById('ptext').className = 'am-active';
}
function submitit()
{
  var code=editor.getValue();
  code=$.base64.btoa(code);
  console.log(code);
  document.getElementById('username').value=document.getElementById('usrname_input').value
  document.getElementById('code').value=code;
  document.getElementById("codeform").submit();
}
$(function() {
    
    $('#doc-prompt-toggle').on('click', function() {
      $('#my-prompt').modal({
        relatedTarget: this,
        onConfirm: function() {
          loadingpr();
        },
      });
    });
  });
  
function loadingpr() {
  $('#my-modal-loading').modal('open');
  }
