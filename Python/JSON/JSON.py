import json

data = {
    "2": {
        "name": "Mohamed Eldayf", "age": "Unknown", "city": "Gaza", "job": "Anonymous (0_0)"
    },
    "1": {
        "name": "Abu Ubayda", "age": "Unknown", "city": "Gaza", "job": "Make Peoples Happy (^_^)"
    },
    "3": {
        "name": "Abu Hamza", "age": 22, "city": "Unknown", "job": "Cyper Security"
    }
}

# Using json.dump to write to a file
# with open('person.json', 'w') as text:
#     json.dump(data, text, sort_keys=True, indent=4)
# print(type(data))

# Using json.dumps to get a string
# json_string = json.dumps(data, indent=4, sort_keys=True)
# print(json_string)
# print(type(json_string))

# json_format = '["foo", {"bar":["baz", null, 1.0, 2]}]'
# print(type(json_format))
# json_string = json.loads(json_format)
# print(json_string)
# print(type(json_string))

with open('person.json', 'r') as file:
    data = json.load(file)

print(data)
print(type(data))
