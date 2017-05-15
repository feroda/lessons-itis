#!/usr/bin/env python2

from bottle import route, run, template
from bottle import post, get, request

from naoqi import ALProxy

NAO_IP = '192.168.1.12'
NAO_PORT = 9559

def nao_speak(msg):
    tts = ALProxy("ALTextToSpeech", NAO_IP, NAO_PORT)
    tts.say(msg)

@route('/speak/<msg>')
def nao_speak_with_get_and_path(msg):
    nao_speak(msg)
    return template('<b>NAO said</b>: {{msg}}!', msg=msg)


# STESSA COSA MA CON POST HTTP
@post('/speak/')
def nao_speak_with_post():
    nao_speak(request.forms.msg)
    return template('<b>NAO said</b>: {{msg}}!', msg=msg)


run(host='localhost', port=8080)
