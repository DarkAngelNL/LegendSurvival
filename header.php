<?php
$error = false;
if($error = false)
{
    //the beautifully styled content, everything looks good
    echo '<div id="content">some text</div>';
}
else
{
    //bad looking, unstyled error :-( 
} 
?>
<div id="userbar">Hello Example. Not you? Log out.</div>
<?php
<div id="userbar">
    if($_SESSION['signed_in'])
    {
        echo 'Hello' . $_SESSION['user_name'] . '. Not you? <a href="signout.php">Sign out</a>';
    }
    else
    {
        echo '<a href="signin.php">Sign in</a> or <a href="sign up">create an account</a>.';
    }
</div>
  
</div><!-- content -->
</div><!-- wrapper -->
<div id="footer">Created for Nettuts+</div>
</body>
</html>