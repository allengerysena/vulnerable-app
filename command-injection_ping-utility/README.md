## Notes
This script is an enhancement of a script from [DVWA (exec - low)](https://github.com/digininja/DVWA/blob/master/vulnerabilities/exec/source/low.php).

## How to use

Build docker image.

```sh
sudo docker build -t command-injection_ping-utility .
```

Run container on port 5678 (can be changed).

```sh
sudo docker run -d -p 5678:80 command-injection_ping-utility
```

Preview.

![image](https://github.com/allengerysena/vulnerable-app/assets/44354273/7ccb8dc4-50cf-4805-840b-9aadb690b9c2)
