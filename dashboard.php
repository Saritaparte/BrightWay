<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url("/brightway/images/carrier.jpg");

            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
            position: relative;
        }

        .dashboard-container {
            text-align: center;
            background-color: rgba(23, 8, 121, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.5);
            position: relative;
            z-index: 1;
        }

        h1 {
            font-size: 3em;
            margin-bottom: 20px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }

        p {
            font-size: 1.5em;
            margin-bottom: 20px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.6);
        }

        button {
            padding: 12px 25px;
            font-size: 1em;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
        }

        button:hover {
            background-color: #218838;
            transform: scale(1.05);
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.5);
            border: 2px solid #00ff75;
        }

        .logo {
            max-width: 150px;
            margin-bottom: 20px;
            border-radius: 50%;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <img src="/brightway/images/ty.jpg" class="logo">
        <h1>Welcome, <span id="usernameDisplay"></span>!</h1>

        <button onclick="logout()">Logout</button>
        <button onclick="goToNext()">Next</button>
    </div>

    <script>
        // Function to extract query parameters from the URL
        function getQueryParams() {
            const params = {};
            const queryString = window.location.search;
            const urlParams = new URLSearchParams(queryString);

            for (let [key, value] of urlParams) {
                params[key] = value;
            }
            return params;
        }

        // Get username and loginId from the URL and display them
        const params = getQueryParams();
        document.getElementById("usernameDisplay").textContent = params.username;
        document.getElementById("loginIdDisplay").textContent = params.loginId;

        // Function to handle logout
        function logout() {
            window.location.href = 'login.html'; // Redirect to login page
        }

        // Function to handle "Next" button click
        function goToNext() {
            window.location.href = 'home.html'; // Redirect to the next page
        }
    </script>
</body>
</html>
