# Correzione

## FASE 1 e FASE 2

Identico a quello di Cesari. Calabrò ha consegnato dopo.
Si veda la correzione su [[../cesari/README.md]]

### sha1sum calcola gli hash dei files

```
$ cat elenco-files.txt | while read a; do sha1sum $a; done
a553a6a721497946ba876ad844a8633f72ca78ed  cesari/footer.php
a553a6a721497946ba876ad844a8633f72ca78ed  calabro/footer.php
7198625f079906abee2d5220875d711debd80048  cesari/read_me_persistent.php
7198625f079906abee2d5220875d711debd80048  calabro/read_me_persistent.php
750c75b8756e1afc200c7e0f280e537c01783ac2  cesari/index.php
750c75b8756e1afc200c7e0f280e537c01783ac2  calabro/index.php
e2f54dd368bbf04ad1965910e59e9d4a631fd92b  cesari/list.php
e2f54dd368bbf04ad1965910e59e9d4a631fd92b  calabro/list.php
6a9a1c7796c0d42a38aeb26eba5c3bebeadaafa5  cesari/login.php
6a9a1c7796c0d42a38aeb26eba5c3bebeadaafa5  calabro/login.php
56097ea45dd0d23c180df42309b17b398f708a3a  cesari/header-1.php
56097ea45dd0d23c180df42309b17b398f708a3a  calabro/header-1.php
690d33b6212a87223f4485a3665e333747804af9  cesari/header-2.php
690d33b6212a87223f4485a3665e333747804af9  calabro/header-2.php
6a21f490e71d621c0e72100da413341af776e39a  cesari/input.php
6a21f490e71d621c0e72100da413341af776e39a  calabro/input.php
22f93531fd60a0b619ee4fa8de0a116c6a4d2d7c  cesari/logout.php
22f93531fd60a0b619ee4fa8de0a116c6a4d2d7c  calabro/logout.php
eabc148463c45e51101e3f28116c734f1d6f5028  cesari/create_me_persistent.php
eabc148463c45e51101e3f28116c734f1d6f5028  calabro/create_me_persistent.php
```

### rmlint individua i files duplicati

```
rmlint cesari calabro

# Duplicate(s):
    ls '/home/fero/src/feroda/lessons-itis/2016-5BI/PHP/ex/CONSEGNE-2017-05-06/cesari/create_me_persistent.php'
    rm '/home/fero/src/feroda/lessons-itis/2016-5BI/PHP/ex/CONSEGNE-2017-05-06/calabro/create_me_persistent.php'
    ls '/home/fero/src/feroda/lessons-itis/2016-5BI/PHP/ex/CONSEGNE-2017-05-06/cesari/footer.php'
    rm '/home/fero/src/feroda/lessons-itis/2016-5BI/PHP/ex/CONSEGNE-2017-05-06/calabro/footer.php'
    ls '/home/fero/src/feroda/lessons-itis/2016-5BI/PHP/ex/CONSEGNE-2017-05-06/cesari/header-1.php'
    rm '/home/fero/src/feroda/lessons-itis/2016-5BI/PHP/ex/CONSEGNE-2017-05-06/calabro/header-1.php'
    ls '/home/fero/src/feroda/lessons-itis/2016-5BI/PHP/ex/CONSEGNE-2017-05-06/cesari/input.php'
    rm '/home/fero/src/feroda/lessons-itis/2016-5BI/PHP/ex/CONSEGNE-2017-05-06/calabro/input.php'
    ls '/home/fero/src/feroda/lessons-itis/2016-5BI/PHP/ex/CONSEGNE-2017-05-06/cesari/login.php'
    rm '/home/fero/src/feroda/lessons-itis/2016-5BI/PHP/ex/CONSEGNE-2017-05-06/calabro/login.php'
    ls '/home/fero/src/feroda/lessons-itis/2016-5BI/PHP/ex/CONSEGNE-2017-05-06/cesari/read_me_persistent.php'
    rm '/home/fero/src/feroda/lessons-itis/2016-5BI/PHP/ex/CONSEGNE-2017-05-06/calabro/read_me_persistent.php'
    ls '/home/fero/src/feroda/lessons-itis/2016-5BI/PHP/ex/CONSEGNE-2017-05-06/cesari/logout.php'
    rm '/home/fero/src/feroda/lessons-itis/2016-5BI/PHP/ex/CONSEGNE-2017-05-06/calabro/logout.php'
    ls '/home/fero/src/feroda/lessons-itis/2016-5BI/PHP/ex/CONSEGNE-2017-05-06/cesari/header-2.php'
    rm '/home/fero/src/feroda/lessons-itis/2016-5BI/PHP/ex/CONSEGNE-2017-05-06/calabro/header-2.php'
    ls '/home/fero/src/feroda/lessons-itis/2016-5BI/PHP/ex/CONSEGNE-2017-05-06/cesari/list.php'
    rm '/home/fero/src/feroda/lessons-itis/2016-5BI/PHP/ex/CONSEGNE-2017-05-06/calabro/list.php'
    ls '/home/fero/src/feroda/lessons-itis/2016-5BI/PHP/ex/CONSEGNE-2017-05-06/cesari/index.php'
    rm '/home/fero/src/feroda/lessons-itis/2016-5BI/PHP/ex/CONSEGNE-2017-05-06/calabro/index.php'

==> Note: Please use the saved script below for removal, not the above output.
==> In total 23 files, whereof 10 are duplicates in 10 groups.
==> This equals 8.15 KB of duplicates which could be removed.

Wrote a sh file to: /home/fero/src/feroda/lessons-itis/2016-5BI/PHP/ex/CONSEGNE-2017-05-06/rmlint.sh
Wrote a json file to: /home/fero/src/feroda/lessons-itis/2016-5BI/PHP/ex/CONSEGNE-2017-05-06/rmlint.json
```
