{include file="Template/header.tpl"}
<table class="jugadores">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Numero</th>
            <th>Posicion</th>
            <th>Club</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$jugadores item=$jugador}
            <tr>
                <td><a href="jugador/{$jugador->id_jugador}">{$jugador->nombre}</a></td>
                <td>{$jugador->numero}</td>
                <td>{$jugador->posicion}</td>
                <td><a href="club/{$jugador->id_club}">{$jugador->club}</a></td>
                {if $logged}
                    <td><a href="deleteJugador/{$jugador->id_jugador}">Borrar</a></td>
                {/if}
            </tr>
        {/foreach}
        
    </tbody>
</table>
{if $logged}
    <div>       
        <h2>Agregar jugador</h2>
        <form action="createJugador" method="POST">
            <input type="text" name="nombre" id="nombre" placeholder="Nombre">
            <input type="number" name="numero" id="numero" placeholder="Numero">
            <input type="text" name="posicion" id="posicion" placeholder="Posicion">
            <select name="club">
                {foreach from=$clubes item=$club}
                    <option value="{$club->id_club}">{$club->club}</option>
                {/foreach}
            </select>
            <input type="submit" value="Guardar">
        </form>
    </div>
{/if}
{include file="Template/footer.tpl"}