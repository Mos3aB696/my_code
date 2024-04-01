from flask import Flask, render_template, jsonify, abort, make_response
from flask import request


skills_app = Flask(__name__)


my_skills = [('Python', 90), ('Flask', 80), ('DevOps', 70), ('HTML', 80),
             ('CSS', 75), ('JavaScript', 60)]

tasks = [
    {
        'id': 1,
        'title': 'Buy groceries',
        'description': 'Milk, Cheese, Pizza, Fruit, Tylenol',
        'done': False
    },
    {
        'id': 2,
        'title': 'Learn Python',
        'description': 'Need to find a good Python tutorial on the web',
        'done': False
    },
    {
        'id': 3,
        'title': 'Learn Flask',
        'description': 'Need to find a good Flask tutorial on the web',
        'done': False
    }
]


@skills_app.route('/')
def homepage():
    return render_template('homepage.html', pagetitle='Homepage')


@skills_app.route('/about')
def about():
    return render_template('about.html', pagetitle='About Us')


@skills_app.route('/skills')
def skills():
    return render_template('skills.html',
                           pagetitle='Skills',
                           page_head='My Skills',
                           description='Here are my skills',
                           data=my_skills)


@skills_app.route('/tasks/v1.0', methods=['GET'])
def get_tasks():
    return jsonify({'tasks': tasks})


@skills_app.route('/tasks/v1.0', methods=['POST'])
def create_task():
    if not request.json or not 'title' in request.json:
        abort(400)
    task = {
        'id': tasks[-1]['id'] + 1,
        'title': request.json['title'],
        'description': request.json.get('description', ""),
        'done': False
    }
    tasks.append(task)
    return jsonify({'task': task}), 201


@skills_app.route('/tasks/v2.0/<int:task_id>', methods=['GET'])
def get_task(task_id):
    task = [task for task in tasks if task['id'] == task_id]
    if len(task) == 0:
        return abort(404)
    return jsonify({'task': task[0]})


@skills_app.errorhandler(404)
def not_fount(error):
    return make_response(jsonify({'error': 'Not Found'}), 404)


@skills_app.route('/todo/api/v1.0/tasks/<int:task_id>', methods=['PUT'])
def update_task(task_id):
    task = [task for task in tasks if task['id'] == task_id]
    if len(task) == 0:
        abort(404)
    if not request.json:
        abort(400)
    if 'title' in request.json and type(request.json['title']) != str:
        abort(400)
    if 'description' in request.json and type(request.json['description']) is not str:
        abort(400)
    if 'done' in request.json and type(request.json['done']) is not bool:
        abort(400)
    task[0]['title'] = request.json.get('title', task[0]['title'])
    task[0]['description'] = request.json.get(
        'description', task[0]['description'])
    task[0]['done'] = request.json.get('done', task[0]['done'])
    return jsonify({'task': task[0]})


@skills_app.route('/todo/api/v1.0/tasks/<int:task_id>', methods=['DELETE'])
def delete_task(task_id):
    task = [task for task in tasks if task['id'] == task_id]
    if len(task) == 0:
        abort(404)
    tasks.remove(task[0])
    return jsonify({'result': True})


if __name__ == '__main__':
    skills_app.run(debug=True, port=2000)
