<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        table, td {
            border: 1px solid black;
        }
        table {
            border-spacing: 30px 11px;
            background-color:green;
            margin: 0 auto;
        }
        td {
            background-color:yellow;
            padding: 5px;
        }
    </style>
</head>
<body style="padding: 0; margin: 0;">

<div style="color: white;
background-color: black;
font-size: 50pt;
padding: 0.25em;">
    Накладна
    <div style="float: right; background-color: rgb(200,10,10);border: 1px rgb(200,200,200) solid;" onclick="test()">
    Провести
    </div>
</div>
<table>
    <tr>
        <th>Найменование</th>
        <th>Вес</th>
        <th></th>
        <th>Найменование</th>
        <th>Вес</th>
    </tr>
    <tr><td width="200";height="10"; >44455555</td><td width="100";height="10"></td> <th width="50"; height="10"></th> <td width="200"; height="10">2222222222</td><td width="100";height="10"></td></tr>
    <tr><td>3</td><td></td><th></th><td>4</td><td></td></tr>
    <tr><td>5</td><td></td><th></th><td>6</td><td></td></tr>
    <tr><td>7</td><td></td><th></th><td>8</td><td></td></tr>
    <tr><td>9</td><td></td><th></th><td>10</td><td></td></tr>
    <tr><td>11</td><td></td><th></th><td>12</td><td></td></tr>
    <tr><td>13</td><td></td><th></th><td>14</td><td></td></tr>
    <tr><td>15</td><td></td><th></th><td>16</td><td></td></tr>
    <tr><td>17</td><td></td><th></th><td>18</td><td></td></tr>
    <tr><td>19</td><td></td><th></th><td>20</td><td></td></tr>
    <tr><td>21</td><td></td><th></th><td>22</td><td></td></tr>
    <tr><td>23</td><td></td><th></th><td>24</td><td></td></tr>
    <tr><td>25</td><td></td><th></th><td>26</td><td></td></tr>
    <tr><td>27</td><td></td><th></th><td>28</td><td></td></tr>
    <tr><td>29</td><td></td><th></th><td>30</td><td></td></tr>
</table>
<script src="scripts/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        console.log("This is jquery fun")
    });

    var waybill = [
            {
                id: 1,
                name: "Лікарська",
                weight: 1.23
            },
            {
                id: 2,
                name: "Сосиски",
                weight: 3.5
            }
    ];

    function test(){
        alert("Hello!")
    }
</script>
</body>
</html>