function discount(price, discount){
    if (discount == 0){
        return price;
    } else {
        return (price - (price * (discount / 100)));
    }
}