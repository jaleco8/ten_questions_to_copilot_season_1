async function asyncOperation(element: number): Promise<number> {
  // Aquí va la operación que deseas realizar de forma asíncrona
  return element * 2;
}

export async function main() {
  const array = [1, 2, 3, 4, 5];

  const promises = array.map(async (element) => {
    return await asyncOperation(element);
  });

  const result = await Promise.all(promises);

  console.log(result); // [2, 4, 6, 8, 10]
}

main();
