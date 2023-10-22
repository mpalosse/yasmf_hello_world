## Sample "Hello World"

A very simple project without database connection.

### To launch the application

After having performed a composer update, 

```
$ docker build -t yasmf_hello_world . 
$ docker run -p 8080:80 -d --name hello_world yasmf_hello_world
```

Open your favorite browser and use this URL to test the web app:

`http://localhost:8080/hello_world/`

