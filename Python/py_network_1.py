# from urllib import request
import requests

# # print(dir(request))
# # response = request.urlopen('http://mos-3ab.tech')
# response = request.urlopen('http://localhost:8080')

# print(type(response))
# # print(dir(response))
# print(response.code)    # code == status == 200
# print(response.length)  # Size in bytes = 13
# # print(response.getheaders())  # Information about the response
# print(response.peek())  # Peek at the first 200 bytes of the response

# first_time_read = response.read()  # Read the response
# print(type(first_time_read))
# print(len(first_time_read))  # The Same as response.length

# html = first_time_read.decode('utf-8')  # Decode the response
# print(type(html))
# print(html)

# second_time_read = response.read()
# print(second_time_read)  # Empty because the response has been read => b''
# print(len(second_time_read))  # 0


# response_2 = request.urlopen('https://www.google.com')
# print(response_2.code)
# print(response_2.isclosed())  # False because the response has not been read
# html_google = response_2.read().decode('utf-8')  # Read the response
# print(html_google[:500])    # Print the first 500 characters
# print(response_2.isclosed())  # True because the response has  been read
# print(response_2.peek())
# # print(response_2.read().decode('utf-8'))

# Get request
payload = {'page': 2, 'count': 25}
response = requests.get('https://httpbin.org/get', params=payload)
# print(response)  # <Response [200]>
# # print(dir(requests)) # All the attributes and methods of the module
# # print(dir(requ))   # All the attributes and methods of the object
# print(response.status_code)  # 200
# # print(help(response))
# print(response.ok)  # True
# print(response.content)  # The same as response.text
# print(response.text)  # The same as response.content but in unicode
# print(response.url)  # The url of the response
# print(response.headers)    # The headers of the response

# post request
# payload = {'user_name': 'Mos3aB', 'pass': "testing"}
# response_2 = requests.post('https://httpbin.org/post', data=payload)
# # print(response_2.text)  # The same as response.content but in unicode
# response_2_dict = response_2.json()  # Convert the response to a dictionary
# print(response_2_dict['origin'])  # you can specify the key of the dictionary
# print(response_2_dict['form'])  # you can specify the key of the dictionary


# Get request with authentication
# response_3 = requests.get(
#     'https://httpbin.org/basic-auth/mos3ab/testing',  auth=('mos3ab', 'testing'))
# print(response_3.status_code)  # 200
# print(response_3.text)  # {"authenticated":true,"user":"mos3ab"}

# Get request with delay
response_4 = requests.get('https://httpbin.org/delay/1', timeout=3)
# <Response [200]> when the timeout is greater than the delay
print(response_4)
