{include file="Template/header.tpl"}
<ul class="jugador">
    <li>Numero: {$jugador->numero}</li>
    <li>Posicion: {$jugador->posicion}</li>
    <li>Club: <a href="club/{$jugador->id_club}"> {$jugador->club}</a></li>
</ul>       
{if $logged}
    <div>
    <h2>Editar jugador</h2>
        <form action="editJugador/{$jugador->id_jugador}" method="POST">
            <input type="text" name="nombre" id="nombre" placeholder="Nombre">
            <input type="number" name="numero" id="numero" placeholder="Numero">
            <input type="text" name="posicion" id="posicion" placeholder="Posicion">
            <select name="club">
                {foreach from=$clubes item=$club}
                    <option value="{$club->id_club}">{$club->club}</option>
                {/foreach}
            </select>
            <input type="submit" value="Editar">
        </form>
    </div>
{/if}
{include file="Template/footer.tpl"}