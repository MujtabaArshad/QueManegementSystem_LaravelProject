<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank</title>
    <style>
        html * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            
        }

        body {
            background-color: #262626;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;

            font-family: sans-serif;
            padding: 3rem;
            margin-right: 90px;

        }

        details {
            position: relative;
            width: 300px;
        }

        summary {
            padding: 1rem;
            cursor: pointer;
            border-radius: 5px;
            background-color: #ddd;
            list-style: none;
        }

        summary::-webkit-details-marker {
            display: none;
        }

        details[open] summary {
            background-color: #ccc;
        }

        ul {
            width: 100%;
            background: #ddd;
            position: absolute;
            top: 100%;
            left: 0;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            border-radius: 5px;
            max-height: 200px;
            overflow-y: auto;
            list-style: none;
            display: none;
        }

        details[open] ul {
            display: block;
        }

        li {
            margin: 0;
            padding: 1rem;
            border-bottom: 1px solid #ccc;
        }

        li:last-child {
            border-bottom: none;
        }

        label {
            width: 100%;
            display: block;
            cursor: pointer;
        }

        label span {
            display: none;
        }

        input[type=radio] {
            display: none;
        }

        input[type=radio]:checked + label {
            background-color: #bbb;
        }

        input[type=radio]:checked + label span {
            display: inline-block;
            width: 1rem;
            height: 1rem;
            border: 1px solid #727272;
            border-radius: 3px;
            background-color: #333;
        }
    </style>
</head>
<body>
    <details class="custom-select">
        <summary>Select an option</summary>
        <ul class="list">
            <li>
                <input type="radio" name="item" id="item1" value="Deposit">
                <label for="item1">Deposit<span></span></label>
            </li>
            <li>
                <input type="radio" name="item" id="item2" value="Withdrawal">
                <label for="item2">Withdrawal<span></span></label>
            </li>
            <li>
                <input type="radio" name="item" id="item3" value="Bill Payment">
                <label for="item3">Bill Payment<span></span></label>
            </li>
        </ul>
    </details>
    <script>
        const sequenceCounters = {
            'Deposit': 10001,
            'Withdrawal': 20001,
            'Bill Payment': 30001
        };

        function generateSequentialNumber(action) {
            sequenceCounters[action]++; 
            return sequenceCounters[action];
        }

        document.querySelector('.custom-select').addEventListener('change', function(event) {
            if (event.target.type === 'radio') {
                const action = event.target.value;

                const sequentialNumber = generateSequentialNumber(action);
                alert(`${action}: ${sequentialNumber}`);
            }
        });
    </script>
</body>
</html>
