<script type="text/javascript" charset="gbk">
function inlinecheck(e){
  if(!e) e=window.event;
  if(!e.target.useremail.value.match(/^\s*[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}\s*$/)){
    alert("���������ʽ����ȷ");
    return false;
  }
  if(e.target.password.value.length < 5){
    alert("���볤������5λ");
    return false;
  }
  if(e.target.password.value != e.target.cfpassword.value){
    alert("�����������벻һ��");
    return false;
  }
  return true;
}
</script>
<h1>ע�����û�</h1>
<!-- BEGIN MESS -->
<h3 style="color:red">
  {MESSAGE}
</h3>
<!-- END MESS -->
<form method="post" name="signinform" action="signin.php" onsubmit="return inlinecheck(event)">
<table border='0'>
<tr>
  <th>��������</th>
  <td> <input type="text" name="useremail" size=30> </td>
</tr>
  <th>����</th>
  <td><input type="password" name="password" size=30> </td>
</tr>
<tr>
  <th>ȷ������</th>
  <td><input type="password" name="cfpassword" size=30> </td>
</tr>
<tr>
  <td><input type="submit" name="submit" value="�ύ"></td>
</tr>
</table>
</form>
