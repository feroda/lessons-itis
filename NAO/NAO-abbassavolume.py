# -*- coding: utf-8 -*-
from naoqi import ALProxy

IP_NAO = '192.168.10.10'
tts = ALProxy("ALTextToSpeech", IP_NAO, 9559)
tts.say("Ciao quinto B, mi abbasso il volume")
tts.setVolume(0.1)
tts.say("Ora il volume è al 10% scusate il disturbo per prima!")
