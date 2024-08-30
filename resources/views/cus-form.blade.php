<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form with Modal</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        /* Basic reset for body and html */
        html, body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            overflow: hidden; /* Prevent scrolling when modal is open */
        }

        /* Modal Overlay */
        .modal-overlay {
            display: none; /* Hidden by default */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6); /* Darker background */
            z-index: 999; /* High z-index to ensure it's on top */
        }

        /* Form Modal */
      
        /* Fade-in animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translate(-50%, -45%);
            }
            to {
                opacity: 1;
                transform: translate(-50%, -50%);
            }
        }

        /* Form Styles */
        #formModal h3 {
            margin-top: 0;
            font-size: 1.6em; /* Larger font size */
            color: #333;
            text-align: center; /* Centered title */
        }

        #yourFormId {
            display: flex;
            flex-direction: column;
            gap: 15px; /* Space between form elements */
        }

        #yourFormId label {
            margin-bottom: 5px;
            font-weight: 600; /* Slightly bolder label text */
            color: #555;
        }

        #yourFormId input[type="text"] {
            padding: 12px; /* Larger padding */
            border: 1px solid #ddd;
            border-radius: 8px; /* More rounded corners */
            font-size: 1em;
            outline: none; /* Remove default outline */
            transition: border-color 0.3s ease; /* Smooth transition for border color */
        }

        #yourFormId input[type="text"]:focus {
            border-color: #007bff; /* Change border color on focus */
        }

        #yourFormId input[type="submit"] {
            padding: 12px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 1.1em; /* Slightly larger font size */
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease; /* Smooth transition for background color and scaling */
        }

        #yourFormId input[type="submit"]:hover {
            background-color: #0056b3;
            transform: scale(1.05); /* Slightly enlarge the button on hover */
        }

        /* Custom Alert Modal */
        #customAlert {
            display: none; /* Hidden by default */
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #fff;
            border-radius: 12px; /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            text-align: center;
            animation: fadeIn 0.3s ease-out; /* Fade-in animation */
        }

        #customAlert img {
            width: 150px;
            height: auto;
            margin-bottom: 15px;
        }

        #customAlert p {
            font-size: 1em;
            color: #333;
            margin-bottom: 20px;
        }

        #customAlert button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #customAlert button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    
<!-- Modal Overlay -->
<div id="modalOverlay" class="modal-overlay"></div>

<!-- Form Modal -->
<div id="formModal">
    <h3>Using CSS to style an HTML Form</h3>
    <form id="yourFormId" onsubmit="handleFormSubmit(event)">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

        <label for="lname">Phone No</label>
        <input type="text" id="lname" name="lastname" placeholder="Your phone number.." required>

        <input type="submit" value="Submit">
    </form>
</div>

<script src="{{ asset('assets/script/script.js') }}"></script>

<!-- Custom Alert Modal -->
<div id="customAlert">
    <img src="{{ asset('assets/img/bank.png') }}" alt="Bank Image">
    <p id="alertMessage"></p>
   
</div>
<script src="{{asset('assets/script/script.js')}}"></script>
</body>
</html>
