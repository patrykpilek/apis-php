# APIs in PHP: from Basic to Advanced

## Content

### .env file

```.dotenv
DB_HOST="your_host"
DB_NAME="your_db_name"
DB_USER="your_db_user"
DB_PASS="your_db_password"
```

- [x] API basics: what APIs are and how to use them
  - [Random User Generator](https://randomuser.me/)
  - [PHP: file_get_contents](https://www.php.net/manual/en/function.file-get-contents.php)
  - [JSON.org](https://www.json.org/json-en.html)
  - [PHP: json_decode](https://www.php.net/manual/en/function.json-decode.php)
  - [Agify.io](https://agify.io/)
- [x] HTTP basics: requests, responses and using cURL
  - [PHP: file_get_contents](https://www.php.net/manual/en/function.file-get-contents.php)
  - [PHP: configuration setting: allow_url_fopen](https://www.php.net/manual/en/filesystem.configuration.php#ini.allow-url-fopen)
  - [cURL](https://curl.se/)
  - [PHP: cURL](https://www.php.net/manual/en/book.curl.php)
  - use cURL instead of file_get_contents to make an API request
  - [List of HTTP status codes](https://en.wikipedia.org/wiki/List_of_HTTP_status_codes)
  - [GitHub 404 page](https://github.com/404)
  - [OpenWeather API](https://openweathermap.org/api)
  - response codes:get the HTTP status code
  - [List of HTTP header fields](https://en.wikipedia.org/wiki/List_of_HTTP_header_fields#Request_fields)
  - [Unsplash](https://unsplash.com/)
  - [Unsplash API documentation: public authentication](https://unsplash.com/documentation#public-authentication)
  - request headers: add meta data about the request
  - [List of HTTP header fields](https://en.wikipedia.org/wiki/List_of_HTTP_header_fields#Response_fields)
  - [PHP: curl_getinfo](https://www.php.net/manual/en/function.curl-getinfo.php)
  - response headers; read meta data about the response
  - [PHP: curl_setopt](https://www.php.net/manual/en/function.curl-setopt.php)
  - get all individual response headers in an array
  - [GitHub API reference: starring a repository](https://docs.github.com/en/rest/activity/starring?apiVersion=2022-11-28)
  - [GitHub access tokens](https://github.com/login?return_to=https%3A%2F%2Fgithub.com%2Fsettings%2Ftokens)
  - [HTTPie GitHub repository](https://github.com/httpie/httpie/)
  - [GitHub resources in the REST API](https://docs.github.com/en/rest/overview/resources-in-the-rest-api?apiVersion=2022-11-28#user-agent-required)
  - use an API that requires a specific request header
  - [The HTML form element](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/form)
  - [HTTP request methods](https://en.wikipedia.org/wiki/Hypertext_Transfer_Protocol#Request_methods)
  - [GitHub activity: starring a repository](https://docs.github.com/en/rest/activity/starring?apiVersion=2022-11-28#check-if-a-repository-is-starred-by-the-authenticated-user)
  - [HTTPie GitHub repository](https://github.com/httpie/httpie/)
  - request method: change the method to get a different result with the same URL
  - [GitHub API: creating a repository](https://docs.github.com/en/rest/repos/repos#create-a-repository-for-the-authenticated-user)
  - request body: add a payload to send data along with the request
- [x] REST and RESTful APIs: using them from PHP
  - [Representational state transfer](https://en.wikipedia.org/wiki/Representational_state_transfer)
  - [The REST architectural style](https://www.ics.uci.edu/~fielding/pubs/dissertation/rest_arch_style.htm)
  - REST and RESTful API: what are they?
  - [GitHub API:gists](https://docs.github.com/en/rest/gists?apiVersion=2022-11-28)
  - access a RESTful API in PHP with cURL
  - [PHP: file_get_contents](https://www.php.net/manual/en/function.file-get-contents.php)
  - [PHP: cURL](https://www.php.net/manual/en/book.curl.php)
  - [Guzzle PHP HTTP client](https://docs.guzzlephp.org/en/stable/)
  - [Guzzle documentation](https://docs.guzzlephp.org/en/stable/)
  - use the Guzzle HTTP client for object-oriented API code
  - [Guzzle PHP HTTP client](https://docs.guzzlephp.org/en/stable/)
  - [Amazon PHP SDK](https://aws.amazon.com/sdk-for-php/)
  - [PHP SDK search](https://www.google.co.uk/search?q=php+sdk)
  - [Stripe payment gateway](https://stripe.com/gb)
  - [Stripe API libraries](https://stripe.com/docs/libraries#server-side-libraries)
  - [Stripe API reference](https://stripe.com/docs/api/customers?lang=php)
  - [PHP: http_build_query](https://www.php.net/manual/en/function.http-build-query.php)
  - [Stripe dashboard](https://dashboard.stripe.com/login)
  - use an SDK: compare the Stripe API to its SDK
- [x] Create a RESTful API: build a framework for serving the API
  - start writing the API: enable URL rewriting
  - the front controller: get the resource, ID and the request method
  - [cURL](https://curl.se/)
  - [Postman API platform](https://www.postman.com/)
  - [HTTPie API testing client](https://httpie.io/)
  - use a client for API development: cURL, Postman or HTTPie
  - [PHP: header](https://www.php.net/manual/en/function.header.php)
  - [PHP: http_response_code](https://www.php.net/manual/en/function.http-response-code.php)
  - set the HTTP status code: best practices
  - add a controller class to decide the response
  - [PHP: spl_autoload_register](https://www.php.net/manual/en/function.spl-autoload-register.php)
  - [Autoloading with Composer](https://getcomposer.org/doc/01-basic-usage.md#autoloading)
  - use Composer's autoloader to load classes automatically
  - [PHP: Type declarations](https://www.php.net/manual/en/language.types.declarations.php)
  - [PHP configuration settings: display_errors](https://www.php.net/manual/en/errorfunc.configuration.php#ini.display-errors)
  - make debugging easier: add type declarations and enable strict type checking
  - [PHP: set_exception_handler](https://www.php.net/manual/en/function.set-exception-handler.php)
  - [PHP: Throwable class](https://www.php.net/manual/en/class.throwable.php)
  - always return JSON: add a generic exception handler and JSON Content-Type header
  - [405 status code: Method not allowed](https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/405)
  - [HTTP Allow header](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Allow)
  - send a 405 status code and Allow header for invalid request methods
- [x] Create a RESTful API: create a database and retrieve data from it
  - create a new database and a database user to access it
  - create a table to store resource data
  - [PHP constructor promotion](https://www.php.net/manual/en/language.oop5.decon.php#language.oop5.decon.constructor.promotion)
  - connect to the database from PHP: add a Database class
  - [Packagist: "dotenv" packages](https://packagist.org/?query=dotenv)
  - move the database connection data to a separate .env file
  - create a table data gateway class for the resource table
  - show a list of all records
  - [JSON.org](https://www.json.org/json-en.html)
  - [PDO: setAttribute](https://www.php.net/manual/en/pdo.setattribute.php)
  - configure PDO to prevent numeric values from being converted to strings
  - [BOOlean values in MySQL/MariaDB](https://mariadb.com/kb/en/boolean/)
  - [JSON.org](https://www.json.org/json-en.html)
  - convert database booleans to boolean literals in the JSON
  - [PDOStatement: fetch](https://www.php.net/manual/en/pdostatement.fetch.php)
  - show an individual record
  - respond with 404 if the resource with the specified ID is not found
- [x] Create a RESTful API: create, update and delete individual resources
  - [PHP: $_POST](https://www.php.net/manual/en/reserved.variables.post.php)
  - [HTTPie default behaviour](https://httpie.io/docs/cli/default-behaviour)
  - [PHP input stream wrappers](https://www.php.net/manual/en/wrappers.php.php#wrappers.php.input)
  - [HTTPie request items](https://httpie.io/docs/cli/request-items)
  - get the data from the request as JSON
  - [HTTP 201 created status code](https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/201)
  - insert a record into the database and respond with a 201 status code
  - [PHP: Error class](https://www.php.net/manual/en/class.error.php)
  - [PHP: set_exception_handler](https://www.php.net/manual/en/function.set-exception-handler.php)
  - [PHP: Error Exception class](https://www.php.net/manual/en/class.errorexception.php)
  - add a generic error handler to output warnings as JSON
  - [HTTP status code 422: unprocessable entity](https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/422)
  - validate the data and respond with a 422 status code if invalid
  - conditionally validate the data when updating an existing record
  - get the data from the request for updating an existing record
  - update the record in the database and return a 200 status code
  - delete the record in the database and return a 200 status code
- [x] API key authentication
  - [Random user generator](https://randomuser.me/) 
  - [GitHub REST API resources](https://docs.github.com/en/rest/overview/resources-in-the-rest-api?apiVersion=2022-11-28) 
  - [PHP: password_hash](https://www.php.net/manual/en/function.password-hash.php) 
  - create a table to store user account data
  - [Pico CSS framework](https://picocss.com/)
  - [PHP: random_bytes](https://www.php.net/manual/en/function.random-bytes.php)
  - [PHP: bin2hex](https://www.php.net/manual/en/function.bin2hex.php)
  - add a register page to insert a new user record and generate a new API key
  - [API key](https://en.wikipedia.org/wiki/API_key)
  - [PHP: $_SERVER](https://www.php.net/manual/en/reserved.variables.server.php)
  - send the API key with the request: query string or request header
  - [HTTP status code 400: Bad request](https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/400)
  - check the API key is present in the request and return 400 if not
  - create a table data gateway class for hte user table
  - [HTTP status code 401: Unauthorized](https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/401)
  - authenticate the API key and return a 401 status code if invalid
  - refactor the front controller to a bootstrap file and Auth class
  - add a foreign key relationship to link task records to user records
  - retrieve the ID of the authenticated user when authenticating
  - restrict the tasks index endpoint to only show the authenticated user's tasks
  - cache the database connection to avoid multiple connections in the same request
- [x] An introduction to authentication using access tokens
  - create the login script and return 400 if the username and password are missing
  - select the user record based on the username in the request
  - check the username and password and return a 401 status code if invalid
  - [PHP: base64_encode](https://www.php.net/manual/en/function.base64-encode.php)
  - generate an encoded access token containing the user details
  - [HTTP Authorization header](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Authorization)
  - [PHP: apache_request_headers](https://www.php.net/manual/en/function.apache-request-headers.php)
  - pass the access token to the task API endpoints in the authorization header
  - validate the access token and decode its contents
  - get the authenticated user data from the access token
- [x] Authentication using JSON Web Tokens (JWTs)
  - [JSON Web Tokens](https://jwt.io/)
  - [PHP JWT package](https://github.com/firebase/php-jwt)
  - [base64 URL encoding](https://en.wikipedia.org/wiki/Base64#The_URL_applications)
  - [PHP: hash_hmac](https://www.php.net/manual/en/function.hash-hmac.php)
  - [HMAC with SHA-2 Functions](https://datatracker.ietf.org/doc/html/rfc7518#section-3.2)
  - [Search: 256-bit key generator](https://www.google.co.uk/search?q=256-bit+key+generator)
  - create a class to encode a payload in a JWT
  - [JSON Web Token claims](https://www.iana.org/assignments/jwt/jwt.xhtml)
  - generate a JWT access token in the login endpoint containing JWT claims
  - [PHP: hash_equals](https://www.php.net/manual/en/function.hash-equals.php)
  - adda method to decode the payload from the JWT
  - pass in the secret key use dor hashing as a dependency
  - authenticate the task endpoints using the JWT
  - [HTTP status code 401: Unauthorized](https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/401)
  - use a custom exception class to return 401 if the signature is invalid
  - [Search: base64 URL decoder](https://www.google.co.uk/search?q=base64url+decoder)
  - don't store sensitive data in the JWT
- [x] Expiring and refreshing access tokens
  - [The "exp" (Expiration Time) Claim](https://datatracker.ietf.org/doc/html/rfc7519#section-4.1.4)
  - [PHP: time](https://www.php.net/manual/en/function.time.php)
  - add an expiry claim to the access token payload when logging in
  - throw a custom exception to not accept the JWT if it has expired
  - issue a refresh token in addition to the access token when logging in
  - add a refresh endpoint and validate the refresh token in the request
  - validate the user in the refresh token using the database
  - issue a new access token and refresh token to the authenticated user
  - create a table to store a refresh token whitelist
  - store the refresh token in the whitelist when issued in the login endpoint
  - replace the refresh token in the whitelist when issued in the refresh endpoint
  - validate the refresh token is on the whitelist and return a 400 response if not
  - add a logout endpoint to remove the an active refresh token from the whitelist
  - add a script to clear out expired refresh tokens from the whitelist
  - see how a single-page application interacts with the API using access tokens