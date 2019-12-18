#-*-coding utf-8-*-
# id.py

import sys
import urllib.request
import json

def main():
    #[CODE 1]
    page_name = "jtbcnews"
    app_id = ""     # App ID
    app_secret = "" # App Secret CODE
    access_token = app_id + "|" + app_secret

    #[CODE 2]
    base = "https://graph.facebook.com/v2.8"    # CHECK VERSION
    node = "/" + page_name
    parameters = "/?access_token=%s" % access_token
    url = base + node + parameters

    #[CODE 3]
    req = urllib.request.Request(url)

    #[CODE 4]
    try:
        response = urllib.request.urlopen(req)
        if response.getcode() == 200:
            data = 
