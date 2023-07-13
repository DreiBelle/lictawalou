<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <style>
        body {
            font-family: "Arial", "Helvetica", sans-serif;        
            background-repeat: no-repeat;
            background-size: cover;
        }

        #container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: calc(100vh - 60px);
            margin-left: 240px;
            padding: 20px;
            padding: 10px;
        }
    </style>
</head>

<body>
    <?php $this->load->view($navbar); ?>
    <div id="container">
       <h2> Welcome to Dashboard</h2>
        </div>
     
    </div>

</body>

</html>
