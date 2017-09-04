{% block content %}


    {{ form("posts/save") }}
    {{ form("posts/save", "method": "post") }}
    <?php
    echo "<label>Username</label>&nbsp &nbsp";

    echo Phalcon\Tag::textField([
    "username",
    "size" => 16,
    "required" => true
    ]);

    echo "<br />";
    echo "<label>Password</label>&nbsp &nbsp";

    echo Phalcon\Tag::passwordField([
    "password",
    "size" => 20,
    "required" => true
    ]);


    ?>

{% endblock %}