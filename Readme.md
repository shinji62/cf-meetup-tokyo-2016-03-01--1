### Cloud Foundry Tokyo Meetup #1


## Slide
 * Route-service.pdf
 * http://www.slideshare.net/gwennetourneau/cloud-foundry-meetup-tokyo-1-route-service



##Demo
You can use pcfdev on your laptop
https://github.com/pivotal-cf/pcfdev    

#1 PHP application (final application)
```bash
$>cd php-simple
$>cf push
```

Application should be deployed
```bash
$>curl -s php-simple.local.pcfdev.io
hello cf meetup
```

#2 Go application (Route service)
Checkout Repo: https://github.com/shinji62/go-service-cf-tokyo-meetup

```bash
$>cd go-service-cf-tokyo-meetup 
$>cf push
```

Create User provided instance
```bash
$> cf cups my-proxy -r https://route-service.local.pcfdev.io
```


Bind service to the php-simple domain
```bash
$>cf bind-route-service local.pcfdev.io my-proxy -n php-simple
```

Now the reponse from php-simple should be different
```

 _            _  _                    __                             _
| |__    ___ | || |  ___        ___  / _|     _ __ ___    ___   ___ | |_  _   _  _ __
| '_ \  / _ \| || | / _ \      / __|| |_     | '_ ` _ \  / _ \ / _ \| __|| | | || '_ \
| | | ||  __/| || || (_) |    | (__ |  _|    | | | | | ||  __/|  __/| |_ | |_| || |_) |
|_| |_| \___||_||_| \___/      \___||_|      |_| |_| |_| \___| \___| \__| \__,_|| .__/
                                                                                |_|
                                                                                |_|
```



