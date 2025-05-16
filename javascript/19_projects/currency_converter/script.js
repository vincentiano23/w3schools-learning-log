// script.js

import { getExchangeRate } from './currencyAPI.js';

const amountInput = document.getElementById("amount");
const fromCurrency = document.getElementById("from");
const toCurrency = document.getElementById("to");
const resultDisplay = document.getElementById("result");
const button = document.getElementById("convertBtn");

button.addEventListener("click", async () => {
  const amount = parseFloat(amountInput.value);
  const from = fromCurrency.value;
  const to = toCurrency.value;

  if (isNaN(amount) || amount <= 0) {
    resultDisplay.textContent = "Please enter a valid amount.";
    return;
  }

  try {
    const rate = await getExchangeRate(from, to);
    const converted = (amount * rate).toFixed(2);
    resultDisplay.textContent = `${amount} ${from} = ${converted} ${to}`;
  } catch (err) {
    resultDisplay.textContent = err.message;
  }
});
