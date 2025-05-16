// currencyAPI.js

export const getExchangeRate = async (from, to) => {
  const url = `https://api.exchangerate-api.com/v4/latest/${from}`;
  try {
    const response = await fetch(url);
    const data = await response.json();
    return data.rates[to]; // return exchange rate only
  } catch (err) {
    throw new Error("Failed to fetch currency rates.");
  }
};
