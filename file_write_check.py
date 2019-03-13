import pyinotify
 
DIR_TO_WATCH=/tmp/notify-dir
FILE_TO_WATCH=/tmp/notify-dir/notify-file.txt
 
wm = pyinotify.WatchManager()
 
dir_events = pyinotify.IN_DELETE | pyinotify.IN_CREATE 
file_events = pyinotify.IN_OPEN | pyinotify.IN_CLOSE_WRITE | pyinotify.IN_CLOSE_NOWRITE 
 
class EventHandler(pyinotify.ProcessEvent):
    def process_IN_DELETE(self, event):
        print(File %s was deleted % event.pathname) #python 3 style print function
    def process_IN_CREATE(self, event):
        print(File %s was created % event.pathname)
    def process_IN_OPEN(self, event):
        print(File %s was opened % event.pathname)
    def process_IN_CLOSE_WRITE(self, event):
        print(File %s was closed after writing % event.pathname)
    def process_IN_CLOSE_NOWRITE(self, event):
        print(File %s was closed after reading % event.pathname)
 
event_handler = EventHandler()
notifier = pyinotify.Notifier(wm, event_handler)
 
wm.add_watch(DIR_TO_WATCH, dir_events)
wm.add_watch(FILE_TO_WATCH, file_events)
 
notifier.loop()