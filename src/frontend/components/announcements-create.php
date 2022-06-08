<div class="announcment-creation-wrapper">
    <form>
        <div class="form__group field">
            <input type="input" class="form__field" placeholder="Заголовок оголошення" name="name" id='name'
                   required />
            <label for="name" class="form__label">Заголовок оголошення</label>
        </div>

        <div class="form__group field">
            <input type="input" class="form__field big" placeholder="Опис оголошення" name="description" id="description"></textarea>
            <label for="name" class="form__label">Опис оголошення</label>
        </div>

        <div class="form__group field">
            <input type="input" class="form__field" placeholder="Місце прибрання" name="location" id='location'
                   required />
            <label for="location" class="form__label">Місце прибрання</label>
        </div>
        <div class="form__group datetime field">
            <input type="datetime-local" class="form__field" data-date-format="dd/mm/yyyy" name="date" id='date'
                   required />
        </div>
        <div class="form__group field file">
            <input type="file" class="file__field" placeholder="Дата та час прибрання" name="file" id='file'
                   data-multiple-caption="{count} files selected" multiple required />
            <label for="file" class="file__label" >Завантажте фото сміття</label>
        </div>
        <div class="form__group">
            <button type="submit" class="form__btn">Розмістити оголошення</button>
        </div>
    </form>
    <script src="frontend/js/files.js"></script>