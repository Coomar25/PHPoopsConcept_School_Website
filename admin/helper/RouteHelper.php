<?php

if (!function_exists("redirect")) {

    function redirect($controller, $data = [])
    {
        $link = $_SESSION['base_url'] . "?r=" . $controller;
        if (!empty($data)) {
            foreach ($data as $key => $dat) {
                $link .= '&' . $key . "=" . $dat;
            }
        }
        header('location:' . $link);
    }
}


// This PHP code defines a function called "redirect" that is used to redirect the user to a new URL. Here is a breakdown of how the function works:

// The first line of the code uses the "function_exists" function to check if the "redirect" function has already been defined. If it has not been defined, the code inside the "if" statement will be executed.

// The "redirect" function takes two parameters: $controller and $data. $controller is the name of the controller that the user should be redirected to, and $data is an optional array of data that should be passed along with the URL.

// The function first creates a URL string based on the value of the $_SESSION['base_url'] variable and the $controller parameter. The $_SESSION['base_url'] variable is used to store the base URL of the website and is typically set in a configuration file.

// If the $data parameter is not empty, the function then loops through the $data array and appends each key-value pair to the URL string as a query parameter.

// Finally, the function uses the "header" function to send an HTTP header that redirects the user to the newly created URL.

// Overall, this function is useful for simplifying the process of redirecting users to new pages in a web application. Instead of manually building a URL string and using the header function each time a redirect is needed, developers can simply call the "redirect" function and pass in the appropriate parameters.