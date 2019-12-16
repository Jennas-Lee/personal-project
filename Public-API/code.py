#-*- coding: utf-8 -*-
# code.py
# normal key : 0u3c%2F4Gt3%2Bwc8WWGur4VU6v93UVM4EauPRyhQywhsbmAIjZEHoPwcdNIo6zgn2BBBTClCgeMud2BPdJHmxaheQ%3D%3D

import requests
import json
import urllib

# url = "http://openapi.q-net.or.kr/api/service/rest/InquiryTestInformationNTQSVC/getFeeList"
# queryString = {"1320":"0u3c%2F4Gt3%2Bwc8WWGur4VU6v93UVM4EauPRyhQywhsbmAIjZEHoPwcdNIo6zgn2BBBTClCgeMud2BPdJHmxaheQ%3D%3D"}
# r = requests.get(url, params=queryString)
# print(json.loads(r.text))

url = 'http://openapi.q-net.or.kr/api/service/rest/InquiryTestInformationNTQSVC/getFeeList'
queryParams = '?' + urllib.parse.urlencode({ urllib.quote_plus('ServiceKey') : '0u3c%2F4Gt3%2Bwc8WWGur4VU6v93UVM4EauPRyhQywhsbmAIjZEHoPwcdNIo6zgn2BBBTClCgeMud2BPdJHmxaheQ%3D%3D', urllib.quote_plus('jmcd') : '1320', urllib.quote_plus('serviceKey') : '0u3c%2F4Gt3%2Bwc8WWGur4VU6v93UVM4EauPRyhQywhsbmAIjZEHoPwcdNIo6zgn2BBBTClCgeMud2BPdJHmxaheQ%3D%3D' })

request = Request(url + queryParams)
request.get_method = lambda: 'GET'
response_body = urlopen(request).read()
print (response_body)
