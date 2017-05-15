from naoqi import ALProxy
tts = ALProxy("ALTextToSpeech", '192.168.1.12', 9559)
tts.say("Hello, world!")
tts.say("Ciao a tutti dal prof Ferroni, e grazie a Davide e Lorenzo per avermi presentato!")
