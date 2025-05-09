<div class="star-rating">
    <div class="stars" style="--rating: 3.5;">
        ★★★★★
        <div class="filled" style="width: calc(var(--rating) / 5 * 100%);">
            ★★★★★
        </div>
    </div>
    <p class="user-count" v-if="count">({{ $ratings }})</p>
</div>
