# docker-eramba


## Abstract
(http://www.eramba.org/)
eramba is an open-source, web-application and framework (largely based on ISO/IEC 27001, 9001, 22301, ITIL, CoBIT and real life experience) aimed to help security managers, consultants and officers with: risk, compliance, audits, awareness, controls catalogues, budgets, efficiencies, continuity plans, exception management, awareness and project management.

## Docker
- debian 
- mysql5.7


# First usage:
```

docker-compose up -d ### Wait for mysql
docker exec -it eramba_web_1 /bin/bash
php /root/init.php
```

