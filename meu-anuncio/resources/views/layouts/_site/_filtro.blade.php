<div class="row">
    <form action="">
        <div class="input_field col s6 m3">
            <select id="finalidade">
                <option value="aluguel">Aluguel</option>
                <option value="troca">Troca</option>
                <option value="venda">Venda</option>
            </select>
            <label for="finalidade">Finalidade</label>
        </div>
        <div class="input_field col s6 m3">
            <select id="categoria">
                <option value="1">Servidores</option>
                <option value="2">Peças</option>
                <option value="3">PC's'</option>
                <option value="4">Outros</option>
            </select>
            <label for="categoria">Categoria</label>
        </div>
        <div class="input_field col s12 m6">
            <select id="cidade">
                <option value="1">Chapada dos Guimarães</option>
                <option value="2">Cuiabá</option>
                <option value="3">Santo Antonio</option>
                <option value="4">Varzea</option>
            </select>
            <label for="categoria">Cidade</label>
        </div>

        <div class="input_field col s12 m4">
            <select id="valor">
                <option value="1">até R$ 500,00</option>
                <option value="2">até R$ 1.000,00</option>
                <option value="3">até R$ 2.0000,00</option>
                <option value="4">até R$ 3.000,00</option>
                <option value="5">até R$ 4.000,00</option>
                <option value="6">até R$ 5.000,00</option>
                <option value="7">Acima ...</option>

            </select>
            <label for="valor">Faixa de Valor</label>
        </div>

        <div class="input_field col s9 m6">
            <input type="text" id="endereco" class="validate" placeholder="Endereço">
            <label for="endereco"></label>
        </div>
        <div class="input_field col s3 m2">
            <button class="btn deep-orange darken-1 right">Filtrar</button>
        </div>
    </form>
</div>