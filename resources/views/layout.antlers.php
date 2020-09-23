<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    {{# {{ snipcart:head }} #}}
</head>

<body>
    <nav>
        {{ nav:menu }}
        <a href="{{ url }}">
            {{ title }}
        </a>
        {{ /nav:menu }}

        <div style="float: right">
            {{ locales }}
            <a href="{{ url }}">
                {{ locale:name | truncate:2 }}
            </a>
            {{ /locales }}
        </div>
    </nav>
    {{ template_content }}
    {{# {{ snipcart:body }} #}}
</body>

</html>