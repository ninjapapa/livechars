<script type="text/javascript" charset="gbk">
function inlinecheck(e){
  if(!e) e=window.event;
  if(!e.target.useremail.value.match(/^\s*[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}\s*$/)){
    alert("电子邮箱格式不正确");
    return false;
  }
  if(e.target.password.value.length < 5){
    alert("密码长度至少5位");
    return false;
  }
  if(e.target.password.value != e.target.cfpassword.value){
    alert("两次输入密码不一致");
    return false;
  }
  return true;
}
</script>
<h1>注册新用户</h1>
<!-- BEGIN MESS -->
<h3 style="color:red">
  {MESSAGE}
</h3>
<!-- END MESS -->
<form method="post" name="signinform" action="signin.php" onsubmit="return inlinecheck(event)">
<table border='0'>
<tr>
  <th>电子邮箱</th>
  <td> <input type="text" name="useremail" size=30> </td>
</tr>
  <th>密码</th>
  <td><input type="password" name="password" size=30> </td>
</tr>
<tr>
  <th>确认密码</th>
  <td><input type="password" name="cfpassword" size=30> </td>
</tr>
<tr>
  <td><input type="submit" name="submit" value="提交"></td>
</tr>
</table>
</form>
