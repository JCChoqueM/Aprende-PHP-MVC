export async function post(o,r){const t=await fetch(o,{method:"POST",body:r});if(!t.ok)throw new Error("Error HTTP");return await t.json()}//# sourceMappingURL=apiClient.js.map
