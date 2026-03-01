// Cliente HTTP centralizado
export async function post(url, formData) {
    const response = await fetch(url, {
        method: 'POST',
        body: formData
    });

    // Siempre valida estado HTTP
    if (!response.ok) {
        throw new Error('Error HTTP');
    }

    return await response.json();
}