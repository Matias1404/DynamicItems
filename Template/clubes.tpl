{include file="Template/header.tpl"}
<table class="clubes">
    <thead>
        <tr>
            <th>Club</th>
        </tr>
    </thead>
    <tbody>
    {foreach from=$clubes item=$club}
        <tr>
            <td><a href="club/{$club->id_club}">{$club->club}</a></td>
            {if $logged}
                <td><a href="deleteClub/{$club->id_club}">Borrar</a></td>
            {/if}
        </tr>
    {/foreach}
    </tbody>
</table>
{if $logged}
    <div>
        <h2>Crear Club</h2>
        <form action="createClub" method="POST">
            <input type="text" name="club" id="club" placeholder="Club">
            <input type="submit" value="Guardar">
        </form>
    </div>
{/if}
{include file="Template/footer.tpl"}