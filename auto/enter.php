<html>
<head>
	<meta charset="utf-8">
	<title>HTML5 Contact Form</title>
	<link rel="stylesheet" media="screen" href="styles.css" >
</head>
<body>
<form class="contact_form" action=auto.php method="post" name="contact_form">
    <ul>
        <li>
             <h2>Ти собственно хто?</h2>
             <span class="required_notification">* Denotes Required Field</span>
        </li>
        <li>
            <label for="login">login:</label>
            <input name = "name" type="text"  placeholder="Ivan" required />
        </li>
        <li>
            <label for="password">password:</label>
            <input type="text" name="parol" placeholder="parol"/>
           
        </li>
        <li>
            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="ivan@example.com" required />
            <span class="form_hint">Proper format "name@something.com"</span>
        </li>
        
        <li>
        	<button class="submit" type="submit">Submit Form</button>
        </li>
    </ul>
</form>
</body>
</html>