<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.7.2/css/bulma.min.css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Book</title>
</head>
<body>
    <section class="hero is-fullheight">
        <div class="hero-body">
            <h1 class="title is-2">Hotel Booking System</h1>
                <div class="columns">
                        <div class="column is-7">
                        <form method="get" action="index.php">
                        First Name:
                        <input class="input is-rounded is-hovered" name="name" type="text" placeholder="Please enter your name" required>
                        Surname:
                        <input class="input is-hovered is-rounded" name="surname" type="text" placeholder="Please enter your surname" required>
                        Select your hotel below:
                        <br>
                        <div class="control">
                            <div class="select is-rounded">
                                <select class="is-hovered" required>
                                    <option value="" disabled selected>--please select your hotel--</option>
                                    <option value="1" name="one">Hotel #1</option>
                                    <option value="2" name="two">Hotel #2</option>
                                    <option value="3" name="three">Hotel #3</option>
                                </select>
                            </div>
                        </div>
                        Number of Nights:
                        <input class="input is-rounded is-hovered is" type="number" name="quantity" min="1" max="90" required>
                        <br>
                        <br>
                        <button class="button" type="submit" value="Submit">Submit</button>
                        </form>
                    <div class="container is-fluid">   
                    </div>
        </div>
    </section>

<script>
    var dropdown = document.querySelector('.dropdown');
    dropdown.addEventListener('click', function(event) {
    event.stopPropagation();
    dropdown.classList.toggle('is-active');
    });
</script>
    
</body>
</html>