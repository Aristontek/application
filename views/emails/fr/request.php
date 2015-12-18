<?php

?>
<html lang="fr">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <meta charset="UTF-8">
        <style>
            table {width:50%;margin:5px;border-collapse:collapse;}
            table, th, td {border: 1px solid black;}
            th, td {padding: 20px;}
            h5 {color:red;}
        </style>
    </head>
    <body>
        <h3>{Title}</h3>
        <p>{Firstname} {Lastname} vous soumet une demande d'absence. Voici les <a href="{BaseUrl}leaves/{LeaveId}">détails</a> :</p>
        <table>
            <tr>
                <td>Du &nbsp;</td><td>{StartDate}&nbsp;({StartDateType})</td>
            </tr>
            <tr>
                <td>Au &nbsp;</td><td>{EndDate}&nbsp;({EndDateType})</td>
            </tr>
            <tr>
                <td>Type &nbsp;</td><td>{Type}</td>
            </tr>
            <tr>
                <td>Durée &nbsp;</td><td>{Duration}</td>
            </tr>
            <tr>
                <td>Crédit &nbsp;</td><td>{Balance}</td>
            </tr>
            <tr>
                <td>Cause &nbsp;</td><td>{Reason}</td>
            </tr>
        </table>
        <br />
        <p>
            <a href="{BaseUrl}requests/accept/{LeaveId}">Accepter</a>&nbsp;
            <a href="{BaseUrl}requests/reject/{LeaveId}">Refuser</a>
        </p>
        <p>Vous pouvez vérifier <a href="{BaseUrl}hr/counters/collaborators/{UserId}">l'état des congés</a> avant de valider cette demande.</p>
        <hr>
        <h5>*** Ceci est un message généré automatiquement, veuillez ne pas répondre à ce message ***</h5>
    </body>
</html>