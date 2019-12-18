#-*-coding utf-8-*-
# id.py

import sys
import urllib.request
import json

def main():
    #[CODE 1]
    page_name = "jtbcnews"
    app_id = "559747767922395"     # App ID
    app_secret = "c1ae39404313ecdd2e7d7d55bd9a0280" # App Secret CODE
    access_token = app_id + "|" + app_secret
    # EAAH9Fm7e7tsBACSbOrVmpZB7fZBXW7kzlmxVHSAKfQTnMTxfA6p40LBgqAY16PR8qYUmc9mhOZBxxFYGs1gaUqhmQ3KXat1DEzGbqNMnr0qfQQScXbHLsigV59DZAJ9tSfeN70Vue7ZA1xiO7OfkTXiJbTEwXJMwT1V8LoZC6gJQJAECXZBtY6U4lGoQ3ZAhIvvJSVFAMR2IEANMpA14x13wW8oRGRj2Ao4ZD
    # 200920440387013 jtbcnews code

    #[CODE 2]
    base = "https://graph.facebook.com/v2.9"    # CHECK VERSION
    node = "/" + page_name
    parameters = "/?access_token=%s" % access_token
    url = base + node + parameters

    #[CODE 3]
    req = urllib.request.Request(url)

    #[CODE 4]
    try:
        response = urllib.request.urlopen(req)
        if response.getcode() == 200:
            data = json.loads(response.read().decode('utf-8'))
            page_id = data['id']
            print("%s Facebook Numeric Number ID : %s" % (page_name, page_id))
    except Exception as e:
        print(e)
        print(url)

if __name__ == "__main__":
    main()
