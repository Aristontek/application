<?php

?>
<html lang="nl">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <meta charset="UTF-8">
    </head>
    <body>
        <h3>{Title}</h3>
        Afwezigheidsverzoek van {Firstname} {Lastname}. Hieronder de <a href="{BaseUrl}leaves/{LeaveId}">details</a> :
        <table border="0">
            <tr>
                <td>Van &nbsp;</td><td>{StartDate}&nbsp;({StartDateType})</td>
            </tr>
            <tr>
                <td>Tot &nbsp;</td><td>{EndDate}&nbsp;({EndDateType})</td>
            </tr>
            <tr>
                <td>Type &nbsp;</td><td>{Type}</td>
            </tr>
            <tr>
                <td>Duration &nbsp;</td><td>{Duration}</td>
            </tr>
            <tr>
                <td>Balance &nbsp;</td><td>{Balance}</td>
            </tr>
            <tr>
                <td>Reden &nbsp;</td><td>{Reason}</td>
            </tr>
            <tr>
                <td><a href="{BaseUrl}requests/accept/{LeaveId}">Accepteren</a>&nbsp;</td>
              <td><a href="{BaseUrl}requests/reject/{LeaveId}">Afwijzen</a></td>
            </tr>
        </table>
        <br />
        Hier kunt u het <a href="{BaseUrl}hr/counters/collaborators/{UserId}">dagensaldo</a> controleren <a href="{BaseUrl}requests/counters/{UserId}"></a>voordat u dit verzoek valideert.
</body>
</html>
