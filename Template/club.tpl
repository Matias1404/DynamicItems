{include file="Template/header.tpl"}
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Numero</th>
            <th>Posicion</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$jugadores item=$jugador}
            <tr>
                <td><a href="jugador/{$jugador->id_jugador}">{$jugador->nombre}</a></td>
                <td>{$jugador->numero}</td>
                <td>{$jugador->posicion}</td>
            </tr>
        {/foreach}
    </tbody>
</table>
{if $logged}
    <div>
        <h2>Editar Club</h2>
        <form action="editClub/{$club->id_club}" method="POST">
            <input type="text" name="club" id="club" placeholder="Club">
            <input type="submit" value="Editar">
        </form>
    </div>
{/if}
{include file="Template/footer.tpl"}