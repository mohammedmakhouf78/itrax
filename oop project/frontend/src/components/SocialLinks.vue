<template lang="">
    <div>
        <ul>
            <li>
                <i class="fab fa-instagram"></i>
            </li>
            <li>
                <i class="fab fa-facebook"></i>
            </li>
            <li>
                <i class="fab fa-twitter"></i>
            </li>
            <li>
                <i class="fab fa-whatsapp"></i>
            </li>
        </ul>
    </div>
</template>
<script>
export default {
    
}
</script>
<style scoped>
    ul,ul li{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    ul{
        list-style: none;
        width: 120px;
    }

    li{
        font-size: 12px;
        width: 28px;
        height: 28px;
        border-radius: 4px;
        align-items: center;
        justify-content: center;
    }

    li:hover{
        background-color: var(--light-blue);
        cursor: pointer;
    }
</style>